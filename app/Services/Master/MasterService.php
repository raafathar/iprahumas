<?php

namespace App\Services\Master;

use App\DTO\Jabatan\JabatanDTO;
use App\DTO\Golongan\GolonganDTO;
use App\DTO\Instansi\InstansiDTO;
use App\DTO\Provinsi\ProvinsiDTO;
use App\DTO\Kabupaten\KabupatenDTO;
use App\DTO\Kecamatan\KecamatanDTO;
use App\DTO\Kelurahan\KelurahanDTO;

interface MasterService
{
    /**
     * |-------------------------------------------------------------------------------|
     * |                                                                               |
     * |                                    Instansi                                   |
     * |                                                                               |
     * |-------------------------------------------------------------------------------|
     */

    /**
     * Get All Instansi
     * 
     * @return \Illuminate\Support\Facades\DB
     */
    public function getAllDataInstansi();

    /**
     * Get Data By Id
     * 
     * @param string $id
     * @return object|\Illuminate\Support\Facades\DB
     */
    public function getDataInstansiById($id);

    /**
     * Create Instansi
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Instansi\InstansiDTO $data
     * @return \Illuminate\Support\Facades\DB
     */
    public function createInstansi(InstansiDTO $data);

    /**
     * Update Instansi
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Instansi\InstansiDTO $data
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function updateInstansi(InstansiDTO $data, $id, $column = "id");

    /**
     * Update Instansi
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function deleteInstansi($id, $column = "id");

    /**
     * |-------------------------------------------------------------------------------|
     * |                                                                               |
     * |                                    JABATAN                                    |
     * |                                                                               |
     * |-------------------------------------------------------------------------------|
     */

    /**
     * Get All Jabatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @return \Illuminate\Support\Facades\DB
     */
    public function getAllDataJabatan();

    /**
     * Get Data By Id
     * 
     * @param string $id
     * @return object|\Illuminate\Support\Facades\DB
     */
    public function getDataJabatanById($id);

    /**
     * Create Jabatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Jabatan\JabatanDTO $data
     * @return \Illuminate\Support\Facades\DB
     */
    public function createJabatan(JabatanDTO $data);

    /**
     * Update Jabatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Jabatan\JabatanDTO $data
     * @param string|int $id
     * @param string $column
     * @return object|\Illuminate\Support\Facades\DB
     */
    public function updateJabatan(JabatanDTO $data, $id, $column = "id");

    /**
     * Update Jabatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function deleteJabatan($id, $column = "id");

    /**
     * |-------------------------------------------------------------------------------|
     * |                                                                               |
     * |                                    Golongan                                   |
     * |                                                                               |
     * |-------------------------------------------------------------------------------|
     */

    /**
     * Get All Golongan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @return \Illuminate\Support\Facades\DB
     */
    public function getAllDataGolongan();

    /**
     * Get Data By Id
     * 
     * @param string $id
     * @return object|\Illuminate\Support\Facades\DB
     */
    public function getDataGolonganById($id);

    /**
     * Create Golongan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Golongan\GolonganDTO $data
     * @return \Illuminate\Support\Facades\DB
     */
    public function createGolongan(GolonganDTO $data);

    /**
     * Update Golongan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Golongan\GolonganDTO $data
     * @param string|int $id
     * @param string $column
     * @return object|\Illuminate\Support\Facades\DB
     */
    public function updateGolongan(GolonganDTO $data, $id, $column = "id");

    /**
     * Update Golongan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function deleteGolongan($id, $column = "id");

    /**
     * |-------------------------------------------------------------------------------|
     * |                                                                               |
     * |                                    Kelurahan                                  |
     * |                                                                               |
     * |-------------------------------------------------------------------------------|
     */

    /**
     * Get All Kelurahan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @return \Illuminate\Support\Facades\DB
     */
    public function getAllDataKelurahan();

    /**
     * Search Kelurahan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @return \Illuminate\Support\Facades\DB
     */
    public function searchKelurahan($data);

    /**
     * Create Kelurahan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Kelurahan\KelurahanDTO $data
     * @return \Illuminate\Support\Facades\DB
     */
    public function createKelurahan(KelurahanDTO $data);

    /**
     * Update Kelurahan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Kelurahan\KelurahanDTO $data
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function updateKelurahan(KelurahanDTO $data, $id, $column = "id");

    /**
     * Update Kelurahan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function deleteKelurahan($id, $column = "id");


    /**
     * |-------------------------------------------------------------------------------|
     * |                                                                               |
     * |                                    Kecamatan                                  |
     * |                                                                               |
     * |-------------------------------------------------------------------------------|
     */

    /**
     * Get All Kecamatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @return \Illuminate\Support\Facades\DB
     */
    public function getAllDataKecamatan();

    /**
     * Search Kecamatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @return \Illuminate\Support\Facades\DB
     */
    public function searchKecamatan($data);

    /**
     * Create Kecamatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Kecamatan\KecamatanDTO $data
     * @return \Illuminate\Support\Facades\DB
     */
    public function createKecamatan(KecamatanDTO $data);

    /**
     * Update Kecamatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Kecamatan\KecamatanDTO $data
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function updateKecamatan(KecamatanDTO $data, $id, $column = "id");

    /**
     * Update Kecamatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function deleteKecamatan($id, $column = "id");

    /**
     * |-------------------------------------------------------------------------------|
     * |                                                                               |
     * |                                    Kabupaten                                  |
     * |                                                                               |
     * |-------------------------------------------------------------------------------|
     */

    /**
     * Get All Kabupaten
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @return \Illuminate\Support\Facades\DB
     */
    public function getAllDataKabupaten();

    /**
     * Search Kabupaten
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @return \Illuminate\Support\Facades\DB
     */
    public function searchKabupaten($data);

    /**
     * Create Kabupaten
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Kabupaten\KabupatenDTO $data
     * @return \Illuminate\Support\Facades\DB
     */
    public function createKabupaten(KabupatenDTO $data);

    /**
     * Update Kabupaten
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Kabupaten\KabupatenDTO $data
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function updateKabupaten(KabupatenDTO $data, $id, $column = "id");

    /**
     * Update Kabupaten
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function deleteKabupaten($id, $column = "id");


    /**
     * |-------------------------------------------------------------------------------|
     * |                                                                               |
     * |                                    Provinsi                                  |
     * |                                                                               |
     * |-------------------------------------------------------------------------------|
     */

    /**
     * Get All Provinsi
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @return \Illuminate\Support\Facades\DB
     */
    public function getAllDataProvinsi();

    /**
     * Search Provinsi
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @return \Illuminate\Support\Facades\DB
     */
    public function searchProvinsi($data);

    /**
     * Create Provinsi
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Provinsi\ProvinsiDTO $data
     * @return \Illuminate\Support\Facades\DB
     */
    public function createProvinsi(ProvinsiDTO $data);

    /**
     * Update Provinsi
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Provinsi\ProvinsiDTO $data
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function updateProvinsi(ProvinsiDTO $data, $id, $column = "id");

    /**
     * Update Provinsi
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function deleteProvinsi($id, $column = "id");
}
