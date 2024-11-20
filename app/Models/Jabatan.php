<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jabatan extends Model
{
    use HasUuids;
    protected $guarded = [];

    public function form(): BelongsTo
    {
        return $this->belongsTo(Form::class, "jabatan_id", "id");
    }
}
