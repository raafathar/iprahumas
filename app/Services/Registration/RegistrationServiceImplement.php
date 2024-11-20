<?php

namespace App\Services\Registration;

use App\DTO\Registration\RegistrationDTO;
use App\Models\Form;
use App\Models\User;
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
        $user = $this->userRepository->create($data->getUserFormat());
        $this->formRepository->create($data->getFormFormat($user));

        // dd($data);
        // try {
        // } catch (\Exception $th) {
        //     throw new InvalidArgumentException($th);
        // }
        // DB::transaction(function () use ($data) {
        // });
    }

    public function getAnggotaById($id)
    {
        return $this->userRepository->getData($id);
    }

    // Pendaftaran
    public function getPendaftaranById($id)
    {
        $user = $this->userRepository->getData($id);

        // dd($user);
        if (!$user) {
            return null;
        }

        return $this->formRepository->getFormByUser($user->id);
    }

    public function getDataAnggotaById($id)
    {
        return
            Form::with('user', 'golongan', 'jabatan', 'instansi')->where('user_id', $id)->first();
    }

    // Update Pendaftaran
    public function updatePendaftaran(RegistrationDTO $data, $id, $column = "user_id")
    {
        $user = $this->userRepository->getData($id);

        if (!$user) {
            return null;
        }

        return $this->formRepository->updatePendaftaran($data, $user->id, $column);
    }

    public function deletePendaftaran($id, $column = "user_id")
    {
        $user = $this->userRepository->getData($id);

        if (!$user) {
            return null;
        }

        $this->formRepository->deletePendaftaran($user->id);
        return $this->userRepository->delete($user->id);
    }

    public function updateAnggota(RegistrationDTO $data, $id, $column = "user_id")
    {
        $user = $this->userRepository->getData($id);

        if (!$user) {
            return null;
        }

        // $this->userRepository->update(
        //     [
        //         "username" => $data->username,
        //         "email" => $data->email,
        //     ],
        //     $user->id,
        //     $column = "id"
        // );

        $this->formRepository->updateAnggota([
            "jabatan_id" => $data->jabatan_id,
            "golongan_id" => $data->golongan_id,
            "instansi_id" => $data->instansi_id,
            "NIP" => $data->NIP,
            "f_unit_kerja" => $data->f_unit_kerja,
            "f_no_wa" => $data->f_no_wa,
            "f_jenis_kartu" => $data->f_jenis_kartu,
            "f_alamat" => $data->f_alamat,
        ], $user->id, $column);

        return $this->userRepository->update(
            [
                "username" => $data->username,
                "email" => $data->email,
            ],
            $user->id,
            $column = "id"
        );
    }
}
