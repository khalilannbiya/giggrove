<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceTagline extends Model
{
    use SoftDeletes;

    protected $dates = [
        "created_at",
        "updated_at",
        "deleted_at",
    ];

    protected $fillable = [
        "sevice_id",
        "tagline",
    ];
}
