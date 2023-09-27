<?php

namespace App\Models;

use App\Models\User;
use App\Models\Order;
use App\Models\UserAdvantage;
use App\Models\ServiceTagline;
use App\Models\ServiceAdvantage;
use App\Models\ServiceThumbnail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    use SoftDeletes;

    protected $dates = [
        "created_at",
        "updated_at",
        "deleted_at",
    ];

    protected $fillable = [
        "user_id",
        "title",
        "description",
        "delivery_time",
        "revision_limit",
        "price",
        "note",
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function service_thumbails(): HasMany
    {
        return $this->hasMany(ServiceThumbnail::class);
    }

    public function service_taglines(): HasMany
    {
        return $this->hasMany(ServiceTagline::class);
    }

    public function service_advantages(): HasMany
    {
        return $this->hasMany(ServiceAdvantage::class);
    }

    public function user_advantages(): HasMany
    {
        return $this->hasMany(UserAdvantage::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
