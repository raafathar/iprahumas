<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class AuthenticationServiceImplement implements AuthenticationService
{

    public function __construct(
        public UserRepository $userRepository
    ) {}

    /**
     * Attempt to authenticate the request's credentials.
     * @param \App\Http\Requests\Auth\LoginRequest $request
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(LoginRequest $request): void
    {
        $this->ensureIsNotRateLimited($request);

        if (!Auth::attemptWhen(
            [
                $this->keyAuth($request->username) => $request->username,
                "password" => $request->password,
            ],
            fn(User $user) => $user->form->isAccept == 1,
            $request->boolean('remember')
        )) {
            RateLimiter::hit($this->throttleKey($request));

            if (!$this->validateUserCredentials($request)) {
                throw ValidationException::withMessages([
                    'username' => trans('auth.failed'),
                ]);
            }

            if (!$this->userRepository->isUserAccepted($request->username, $this->keyAuth($request->username))) {
                throw ValidationException::withMessages([
                    'username' => trans('auth.unaccepted'),
                ]);
            }
        }


        RateLimiter::clear($this->throttleKey($request));
    }

    /**
     * Validate user credentials.
     */
    private function validateUserCredentials(LoginRequest $request): bool
    {

        return $this->userRepository->isValueExist($request->username) &&
            $this->userRepository->isValueExist(Hash::make($request->password), "password");
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @param \App\Http\Requests\Auth\LoginRequest $request
     * @throws \Illuminate\Validation\ValidationException
     */
    private function ensureIsNotRateLimited(LoginRequest $request): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey($request), 30)) {
            return;
        }

        event(new Lockout($request));

        $seconds = RateLimiter::availableIn($this->throttleKey($request));

        throw ValidationException::withMessages([
            'username' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     * 
     * @param \App\Http\Requests\Auth\LoginRequest $request
     */
    private function throttleKey(LoginRequest $request): string
    {
        return Str::transliterate(Str::lower($request->string('username')) . '|' . $request->ip());
    }

    /**
     * Determinate key auth
     */
    private function keyAuth($credential): string
    {
        return filter_var($credential, FILTER_VALIDATE_EMAIL) ? "email" : "username";
    }
}
