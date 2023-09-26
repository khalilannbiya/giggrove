<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserExperience extends Model
{
    use SoftDeletes;

    protected $dates = [
        "created_at",
        "updated_at",
        "deleted_at",
    ];

    protected $fillable = [
        "user_detail_id",
        "experience"
    ];
}
