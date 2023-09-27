<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
