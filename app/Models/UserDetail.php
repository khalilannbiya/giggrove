<?php

namespace App\Models;

use App\Models\UserExperience;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserDetail extends Model
{
    use SoftDeletes;

    protected $dates = [
        "created_at",
        "updated_at",
        "deleted_at",
    ];

    protected $fillable = [
        "user_id",
        "photo",
        "role",
        "contact_number",
        "biography"
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function user_experiences(): HasMany
    {
        return $this->hasMany(UserExperience::class);
    }
}
