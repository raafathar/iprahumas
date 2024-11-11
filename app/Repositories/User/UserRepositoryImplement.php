<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepositoryImplement implements UserRepository
{

    public function __construct(
        public User $table
    ) {}

    /**
     * Get All data
     * @return \App\Models\User
     */
    public function getAll(): User
    {
        return $this->table->get();
    }

    /**
     * Get data by Id
     * @param string|int id
     * @return \App\Models\User
     */
    public function getData($id): ?User
    {
        return $this->table->whereId($id)->first();
    }

    /**
     * Create Data
     * 
     * @param array $data
     * @return \App\Models\User
     */
    public function create($data): User
    {
        return $this->table->create($data);
    }

    /**
     * Update Data
     * 
     * @param array $data
     * @return \App\Models\User
     */
    public function update($data, $id, $column = "id")
    {
        return $this->table::where($column, $id)->update($data);
    }

    /**
     * Delete Data
     * 
     * @param array $data
     * @return \App\Models\User
     */
    public function delete($id, $column = "id"): ?User
    {
        $user = $this->table->where($column, $id)->first();
        if ($user) {
            $this->table->where($column, $id)->delete();
        }

        return $user;
    }


    /**
     * Check User Acceptation
     * 
     * @param $credential
     */
    public function isUserAccepted($credential, $column = "username"): bool
    {
        return $this->table::where($column, $credential)->withCount(["form" => fn($q) => $q->where("isAccept", 1)])->first()->form_count > 0;
    }

    /**
     * Check Value of Column User
     * 
     * @param $credential
     */
    public function isValueExist($credential, string $column = "username"): bool
    {
        return $this->table->where($column, $credential)->count() > 0;
    }
}
