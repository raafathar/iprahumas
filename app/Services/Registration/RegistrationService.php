<?php

namespace App\Services\Registration;

use App\DTO\Registration\RegistrationDTO;

interface RegistrationService
{
    /**
     * Register Membership
     * 
     * @param \App\DTO\Registration\RegistrationDTO $data
     * @return object
     */
    public function RegisterMembership(RegistrationDTO $data): void;
}
