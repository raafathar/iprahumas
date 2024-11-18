<?php

namespace App\Services\Registration;

use App\DTO\Registration\RegistrationDTO;
use App\Repositories\Form\FormRepository;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;

class RegistrationServiceImplement implements RegistrationService
{

    public function __construct(
        private FormRepository $formRepository,
        private UserRepository $userRepository,
    ) {}

    /**
     * Register Membership
     * 
     * @param \App\DTO\Registration\RegistrationDTO $data
     * @return object
     */
    public function RegisterMembership(RegistrationDTO $data): void
    {
        try {
            $user = $this->userRepository->create($data->getUserFormat());
            $this->formRepository->create($data->getFormFormat($user));
        } catch (\Exception $th) {
            throw new InvalidArgumentException($th);
        }
        // DB::transaction(function () use ($data) {
        // });
    }
}
