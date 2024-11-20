<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Instansi extends Model
{
    use HasUuids;
    protected $guarded = [];

    public function form(): BelongsTo
    {
        return $this->belongsTo(Form::class, "instansi_id", "id");
    }
}
