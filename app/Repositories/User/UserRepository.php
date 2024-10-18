<?php

namespace App\Repositories\User;

interface UserRepository
{
    /**
     * Get All data
     * @return \App\Models\User
     */
    public function getAll();

    /**
     * Get data by Id
     * @param string|int id
     * @return \App\Models\User
     */
    public function getData($id);

    /**
     * Create Data
     * 
     * @param array $data
     * @return \App\Models\User
     */
    public function create($data);

    /**
     * Update Data
     * 
     * @param array $data
     * @return \App\Models\User
     */
    public function update($data, $id, $column = "id");

    /**
     * Delete Data
     * 
     * @param array $data
     * @return \App\Models\User
     */
    public function delete($id, $column = "id");
}
