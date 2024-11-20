<?php

namespace App\DTO\Registration;

class RegistrationDTO
{

    public function __construct(
        public string $username,
        public string $email,
        public string|null $password = null,
        public string $jabatan_id,
        public string $golongan_id,
        public string $f_agama,
        public string $instansi_id,
        public string $NIP,
        public string $f_unit_kerja,
        public string $f_pendidikan_terakhir,
        public string $f_universitas,
        public string $f_tanggal_lahir,
        public string $keahlian_id,
        public string $kelurahan_id,
        public string $kecamatan_id,
        public string $kabupaten_id,
        public string $provinsi_id,
        public string $f_no_wa,
        public string $f_alamat,
        public string $f_bukti_pembayaran,
        public Bool $isAccept,
    ) {}

    /**
     * Request Format
     */
    public static function getRequest($request, $isAccept = False): self
    {
        return new self(
            $request["username"],
            $request["email"],
            null,
            $request["jabatan"],
            $request["golongan"],
            $request["f_agama"],
            $request["instansi"],
            $request["NIP"],
            $request["f_unit_kerja"],
            $request["f_pendidikan_terakhir"],
            $request["f_universitas"],
            $request["f_tanggal_lahir"],
            $request["keahlian"],
            $request["kelurahan"],
            $request["kecamatan"],
            $request["kabupaten"],
            $request["provinsi"],
            $request["f_no_wa"],
            $request["f_alamat"],
            $request["f_bukti_pembayaran"],
            $isAccept,
        );
    }

    /**
     * Get Format Data
     * @param object $user
     * 
     * @return array
     */
    public function getFormFormat($user): array
    {
        return [
            "user_id" => $user->id,
            "jabatan_id" => $this->jabatan_id,
            "golongan_id" => $this->golongan_id,
            "instansi_id" => $this->instansi_id,
            "keahlian_id" => $this->keahlian_id,
            "NIP" => $this->NIP,
            "f_agama" => $this->f_agama,
            "f_tanggal_lahir" => $this->f_tanggal_lahir,
            "f_unit_kerja" => $this->f_unit_kerja,
            "f_alamat" => $this->f_alamat,
            "provinsi_id" => $this->provinsi_id,
            "kabupaten_id" => $this->kabupaten_id,
            "kecamatan_id" => $this->kecamatan_id,
            "f_pendidikan_terakhir" => $this->f_pendidikan_terakhir,
            "f_universitas" => $this->f_universitas,
            "kelurahan_id" => $this->kelurahan_id,
            "f_no_wa" => $this->f_no_wa,
            "f_bukti_pembayaran" => $this->f_bukti_pembayaran,
            "isAccept" => $this->isAccept,
        ];
    }

    /**
     * Get Format Data
     * 
     * @return array
     */
    public function getUserFormat(): array
    {
        return [
            "username" => $this->username,
            "email" => $this->email,
            "password" => $this->password,
        ];
    }
}
