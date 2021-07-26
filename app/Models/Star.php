<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Star extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    public function starrable()
    {
        return $this->morphTo();
    }

    /**
     * Get the user that owns the Star
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
