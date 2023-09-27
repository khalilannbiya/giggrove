<?php

namespace App\Models;

use App\Models\User;
use App\Models\Service;
use App\Models\OrderStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function user_buyer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'buyer_id', 'id');
    }

    public function user_freelancer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'freelancer_id', 'id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function order_status(): BelongsTo
    {
        return $this->belongsTo(OrderStatus::class);
    }
}
