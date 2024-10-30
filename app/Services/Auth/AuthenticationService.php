<?php

namespace App\Services\Auth;

use App\Http\Requests\Auth\LoginRequest;

interface AuthenticationService
{
    /**
     * Attempt to authenticate the request's credentials.
     *
     * @param \App\Http\Requests\Auth\LoginRequest $request
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(LoginRequest $request): void;
}
