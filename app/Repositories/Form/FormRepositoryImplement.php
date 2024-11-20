<?php

namespace App\Repositories\Form;

use App\Helper\standartData;
use Illuminate\Support\Facades\DB;

class FormRepositoryImplement implements FormRepository
{
    use standartData;
    /**
     * @var Illuminate\Support\Facades\DB
     */
    private $table;

    public function __construct()
    {
        $this->table = DB::table("forms");
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
    public function getData($id)
    {
        return $this->table->whereId($id)->get();
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
            $this->baseCreateData($data, true)
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

    public function updatePendaftaran($data, $id, $column = "user_id")
    {
        // update only column isAccept
        return $this->table->where($column, $id)->update([
            'isAccept' => $data->isAccept
        ]);
    }

    public function updateAnggota($data, $id, $column = "user_id")
    {
        return $this->table->where($column, $id)->update($data);
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

    public function getFormByUser($user_id)
    {
        return $this->table->where("user_id", $user_id)->first();
    }

    public function deletePendaftaran($id)
    {
        return $this->table->where("user_id", $id)->delete();
    }
}
