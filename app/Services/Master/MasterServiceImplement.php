<?php

namespace App\Services\Master;

use App\DTO\Golongan\GolonganDTO;
use App\DTO\Instansi\InstansiDTO;
use App\DTO\Jabatan\JabatanDTO;
use App\Repositories\Golongan\GolonganRepository;
use App\Repositories\Instansi\InstansiRepository;
use App\Repositories\Jabatan\JabatanRepository;

class MasterServiceImplement implements MasterService
{

    /**
     * @var \App\Repositories\Instansi\InstansiRepository
     */
    private $instansiRepository;

    /**
     * @var \App\Repositories\Jabatan\JabatanRepository
     */
    private $jabatanRepository;

    /**
     * @var \App\Repositories\Golongan\GolonganRepository
     */
    private $golonganRepository;

    public function __construct(
        InstansiRepository $instansiRepository,
        JabatanRepository $jabatanRepository,
        GolonganRepository $golonganRepository,
    ) {
        $this->instansiRepository = $instansiRepository;
        $this->jabatanRepository = $jabatanRepository;
        $this->golonganRepository = $golonganRepository;
    }

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
    public function getAllDataInstansi()
    {
        return $this->instansiRepository->getAll();
    }

    /**
     * Get Data By Id
     * 
     * @param string $id
     * @return \Illuminate\Support\Facades\DB
     */
    public function getDataInstansiById($id)
    {
        return $this->instansiRepository->getData($id);
    }

    /**
     * Create Instansi
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Instansi\InstansiDTO $data
     * @return \Illuminate\Support\Facades\DB
     */
    public function createInstansi(InstansiDTO $data)
    {
        return $this->instansiRepository->create([
            "i_nama" => $data->i_nama
        ]);
    }

    /**
     * Update Instansi
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Instansi\InstansiDTO $data
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function updateInstansi(InstansiDTO $data, $id, $column = "id")
    {
        return $this->instansiRepository->update([
            "i_nama" => $data->i_nama
        ], $id, $column);
    }

    /**
     * Update Instansi
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function deleteInstansi($id, $column = "id")
    {
        return $this->instansiRepository->delete($id, $column);
    }

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
    public function getAllDataJabatan()
    {
        return $this->jabatanRepository->getAll();
    }

    /**
     * Get Data By Id
     * 
     * @param string $id
     * @return \Illuminate\Support\Facades\DB
     */
    public function getDataJabatanById($id)
    {
        return $this->jabatanRepository->getData($id);
    }

    /**
     * Create Jabatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Jabatan\JabatanDTO $data
     * @return \Illuminate\Support\Facades\DB
     */
    public function createJabatan(JabatanDTO $data)
    {
        return $this->jabatanRepository->create([
            "j_nama" => $data->j_nama
        ]);
    }

    /**
     * Update Jabatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Jabatan\JabatanDTO $data
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function updateJabatan(JabatanDTO $data, $id, $column = "id")
    {
        return $this->jabatanRepository->update([
            "j_nama" => $data->j_nama
        ], $id, $column);
    }

    /**
     * Update Jabatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function deleteJabatan($id, $column = "id")
    {
        return $this->jabatanRepository->delete($id, $column);
    }

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
    public function getAllDataGolongan()
    {
        return $this->golonganRepository->getAll();
    }

    /**
     * Get Data By Id
     * 
     * @param string $id
     * @return \Illuminate\Support\Facades\DB
     */
    public function getDataGolonganById($id)
    {
        return $this->golonganRepository->getData($id);
    }

    /**
     * Create Golongan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Golongan\GolonganDTO $data
     * @return \Illuminate\Support\Facades\DB
     */
    public function createGolongan(GolonganDTO $data)
    {
        return $this->golonganRepository->create([
            "g_nama" => $data->g_nama
        ]);
    }

    /**
     * Update Golongan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Golongan\GolonganDTO $data
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function updateGolongan(GolonganDTO $data, $id, $column = "id")
    {
        return $this->golonganRepository->update([
            "g_nama" => $data->g_nama
        ], $id, $column);
    }

    /**
     * Update Golongan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function deleteGolongan($id, $column = "id")
    {
        return $this->golonganRepository->delete($id, $column);
    }
}
