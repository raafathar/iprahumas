<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Form extends Model
{
    use HasUuids;

    protected $guarded = [];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, "id", "user_id");
    }

    public function golongan(): HasMany
    {
        return $this->hasMany(Golongan::class, 'id', 'golongan_id');
    }

    public function jabatan(): HasMany
    {
        return $this->hasMany(Jabatan::class, 'id', 'jabatan_id');
    }

    public function instansi(): HasMany
    {
        return $this->hasMany(Instansi::class, 'id', 'instansi_id');
    }
}
