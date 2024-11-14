<?php

namespace App\Repositories\Kabupaten;

use App\Helper\standartData;
use Illuminate\Support\Facades\DB;

class KabupatenRepositoryImplement implements KabupatenRepository
{
    use standartData;
    /**
     * @var Illuminate\Support\Facades\DB
     */
    private $table;

    public function __construct()
    {
        $this->table = DB::table("kabupatens");
    }

    /**
     * Get All data
     * @return Illuminate\Support\Facades\DB
     */
    public function getAll()
    {
        return $this->table->get();
    }

    /**
     * Get data by Id
     * @param string|int id
     * @return Illuminate\Support\Facades\DB
     */
    public function getData($data)
    {
        return $this->table->whereId($data)->orWhere("kab_nama", $data)->first();
    }

    /**
     * Search by Data
     * @param string|int id
     * @return Illuminate\Support\Facades\DB
     */
    public function search($data, $column = "kab_nama")
    {
        return $this->table->whereLike("id", "%" . $data . "%")->orWhereLike($column, "%" . $data . "%")->first();
    }

    /**
     * Create Data
     * 
     * @param array $data
     * @return Illuminate\Support\Facades\DB
     */
    public function create($data)
    {
        return $this->table->insert(
            $this->baseCreateData($data)
        );
    }

    /**
     * Update Data
     * 
     * @param array $data
     * @return Illuminate\Support\Facades\DB
     */
    public function update($data, $id, $column = "id")
    {
        return $this->table->where($column, $id)->update(
            $this->baseUpdateData($data)
        );
    }

    /**
     * Delete Data
     * 
     * @param array $data
     * @return Illuminate\Support\Facades\DB
     */
    public function delete($id, $column = "id")
    {
        return $this->table->where($column, $id)->delete();
    }
}
