<?php

namespace App\Repositories\Kabupaten;

interface KabupatenRepository
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
    public function getData($data);

    /**
     * Search by Data
     * @param string|int id
     * @return Illuminate\Support\Facades\DB
     */
    public function search($data, $column = "kab_nama");

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