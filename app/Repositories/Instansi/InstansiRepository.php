<?php

namespace App\Repositories\Instansi;

use App\DTO\InstansiDTO;

interface InstansiRepository
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
     * @param string|int $id
     * @param string $column
     * @return Illuminate\Support\Facades\DB
     */
    public function update($data, $id, $column = "id");

    /**
     * Delete Data
     * 
     * @param array $data
     * @param string|int $id
     * @param string $column
     * @return Illuminate\Support\Facades\DB
     */
    public function delete($id, $column = "id");
}
