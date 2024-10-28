<?php

namespace App\Services\Registration;

use App\DTO\Registration\RegistrationDTO;
use App\Repositories\Form\FormRepository;
use App\Repositories\User\UserRepository;

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
        $user = $this->userRepository->create([
            "username" => $data->username,
            "email" => $data->email,
            "password" => $data->password,
        ]);

        $this->formRepository->create([
            "user_id" => $user->id,
            "jabatan_id" => $data->jabatan_id,
            "golongan_id" => $data->golongan_id,
            "instansi_id" => $data->instansi_id,
            "NIP" => $data->NIP,
            "f_unit_kerja" => $data->f_unit_kerja,
            "f_no_wa" => $data->f_no_wa,
            "f_jenis_kartu" => $data->f_jenis_kartu,
            "f_alamat" => $data->f_alamat,
            "f_bukti_pembayaran" => $data->f_bukti_pembayaran,
            "isAccept" => $data->isAccept,
        ]);
    }
}
