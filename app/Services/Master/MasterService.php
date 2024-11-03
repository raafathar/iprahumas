<?php

namespace App\Services\Master;

use App\DTO\Jabatan\JabatanDTO;
use App\DTO\Golongan\GolonganDTO;
use App\DTO\Instansi\InstansiDTO;

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
}
