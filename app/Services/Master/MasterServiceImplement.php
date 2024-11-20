<?php

namespace App\Services\Master;

use App\DTO\Jabatan\JabatanDTO;
use App\DTO\Golongan\GolonganDTO;
use App\DTO\Instansi\InstansiDTO;
use App\DTO\Provinsi\ProvinsiDTO;
use App\DTO\Kabupaten\KabupatenDTO;
use App\DTO\Kecamatan\KecamatanDTO;
use App\DTO\Kelurahan\KelurahanDTO;
use App\Repositories\Jabatan\JabatanRepository;
use App\Repositories\Golongan\GolonganRepository;
use App\Repositories\Instansi\InstansiRepository;
use App\Repositories\Provinsi\ProvinsiRepository;
use App\Repositories\Kabupaten\KabupatenRepository;
use App\Repositories\Kecamatan\KecamatanRepository;
use App\Repositories\Kelurahan\KelurahanRepository;

class MasterServiceImplement implements MasterService
{

    public function __construct(
        private InstansiRepository $instansiRepository,
        private JabatanRepository $jabatanRepository,
        private GolonganRepository $golonganRepository,
        private KelurahanRepository $kelurahanRepository,
        private KecamatanRepository $kecamatanRepository,
        private KabupatenRepository $kabupatenRepository,
        private ProvinsiRepository $provinsiRepository,
    ) {}

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
    public function getAllDataKelurahan()
    {
        return $this->kelurahanRepository->getAll();
    }

    /**
     * Search Kelurahan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @return \Illuminate\Support\Facades\DB
     */
    public function searchKelurahan($data)
    {
        return $this->kelurahanRepository->search($data);
    }

    /**
     * Create Kelurahan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Kelurahan\KelurahanDTO $data
     * @return \Illuminate\Support\Facades\DB
     */
    public function createKelurahan(KelurahanDTO $data)
    {
        return $this->kelurahanRepository->create([
            "kel_nama" => $data->kel_nama
        ]);
    }

    /**
     * Update Kelurahan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Kelurahan\KelurahanDTO $data
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function updateKelurahan(KelurahanDTO $data, $id, $column = "id")
    {
        return $this->kelurahanRepository->update([
            "kel_nama" => $data->kel_nama
        ], $id, $column);
    }

    /**
     * Update Kelurahan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function deleteKelurahan($id, $column = "id")
    {
        return $this->kelurahanRepository->delete($id, $column);
    }

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
    public function getAllDataKecamatan()
    {
        return $this->kecamatanRepository->getAll();
    }

    /**
     * Search Kecamatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @return \Illuminate\Support\Facades\DB
     */
    public function searchKecamatan($data)
    {
        return $this->kecamatanRepository->search($data);
    }

    /**
     * Create Kecamatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Kecamatan\KecamatanDTO $data
     * @return \Illuminate\Support\Facades\DB
     */
    public function createKecamatan(KecamatanDTO $data)
    {
        return $this->kecamatanRepository->create([
            "kec_nama" => $data->kec_nama
        ]);
    }

    /**
     * Update Kecamatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Kecamatan\KecamatanDTO $data
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function updateKecamatan(KecamatanDTO $data, $id, $column = "id")
    {
        return $this->kecamatanRepository->update([
            "kec_nama" => $data->kec_nama
        ], $id, $column);
    }

    /**
     * Update Kecamatan
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function deleteKecamatan($id, $column = "id")
    {
        return $this->kecamatanRepository->delete($id, $column);
    }

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
    public function getAllDataKabupaten()
    {
        return $this->kabupatenRepository->getAll();
    }

    /**
     * Search Kabupaten
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @return \Illuminate\Support\Facades\DB
     */
    public function searchKabupaten($data)
    {
        return $this->kabupatenRepository->search($data);
    }

    /**
     * Create Kabupaten
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Kabupaten\KabupatenDTO $data
     * @return \Illuminate\Support\Facades\DB
     */
    public function createKabupaten(KabupatenDTO $data)
    {
        return $this->kabupatenRepository->create([
            "keb_nama" => $data->kab_nama
        ]);
    }

    /**
     * Update Kabupaten
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Kabupaten\KabupatenDTO $data
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function updateKabupaten(KabupatenDTO $data, $id, $column = "id")
    {
        return $this->kabupatenRepository->update([
            "kab_nama" => $data->kab_nama
        ], $id, $column);
    }

    /**
     * Update Kabupaten
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function deleteKabupaten($id, $column = "id")
    {
        return $this->kabupatenRepository->delete($id, $column);
    }

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
    public function getAllDataProvinsi()
    {
        return $this->provinsiRepository->getAll();
    }

    /**
     * Search Provinsi
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @return \Illuminate\Support\Facades\DB
     */
    public function searchProvinsi($data)
    {
        return $this->provinsiRepository->search($data);
    }

    /**
     * Create Provinsi
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Provinsi\ProvinsiDTO $data
     * @return \Illuminate\Support\Facades\DB
     */
    public function createProvinsi(ProvinsiDTO $data)
    {
        return $this->provinsiRepository->create([
            "prov_nama" => $data->prov_nama
        ]);
    }

    /**
     * Update Provinsi
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param \App\DTO\Provinsi\ProvinsiDTO $data
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function updateProvinsi(ProvinsiDTO $data, $id, $column = "id")
    {
        return $this->provinsiRepository->update([
            "prov_nama" => $data->prov_nama
        ], $id, $column);
    }

    /**
     * Update Provinsi
     * 
     * @see https://medium.com/@mohammad.roshandelpoor/dto-data-transfer-objects-in-laravel-6b391e1c2c29
     * @param string|int $id
     * @param string $column
     * @return \Illuminate\Support\Facades\DB
     */
    public function deleteProvinsi($id, $column = "id")
    {
        return $this->provinsiRepository->delete($id, $column);
    }
}
