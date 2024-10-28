<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Form extends Model
{
    use HasUuids;

    protected $guarded = [];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, "id", "user_id");
    }
}
