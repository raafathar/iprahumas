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

    public function getAnggotaById($id);

    public function getPendaftaranById($id);

    public function getDataAnggotaById($id);

    // Update Pendaftaran
    public function updatePendaftaran(RegistrationDTO $data, $id, $column = "id");

    public function deletePendaftaran($id, $column = "user_id");

    // Anggota
    public function updateAnggota(RegistrationDTO $data, $id, $column = "id");
}
