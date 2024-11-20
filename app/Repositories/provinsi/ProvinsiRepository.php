<?php

namespace App\Repositories\Provinsi;

interface ProvinsiRepository
{
    /**
     * Get All data
     * @return Illuminate\Support\Facades\DB
     */
    public function getAll();

    /**
     * Get data by Id
     * @param string|int id
     * @return Illuminate\Support\Facades\DB
     */
    public function getData($id);

    /**
     * Search by Data
     * @param string|int id
     * @return Illuminate\Support\Facades\DB
     */
    public function search($data, $column = "prov_nama");

    /**
     * Create Data
     * 
     * @param array $data
     * @return Illuminate\Support\Facades\DB
     */
    public function create($data);

    /**
     * Update Data
     * 
     * @param array $data
     * @return Illuminate\Support\Facades\DB
     */
    public function update($data, $id, $column = "id");

    /**
     * Delete Data
     * 
     * @param array $data
     * @return Illuminate\Support\Facades\DB
     */
    public function delete($id, $column = "id");
}
