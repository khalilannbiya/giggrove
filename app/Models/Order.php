<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $dates = [
        "created_at",
        "updated_at",
        "deleted_at",
        "expired"
    ];

    protected $fillable = [
        "sevice_id",
        "freelancer_id",
        "buyer_id",
        "order_status_id",
        "file",
        "note",
        "expired",
    ];
}
