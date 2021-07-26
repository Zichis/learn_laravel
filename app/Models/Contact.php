<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner_id'
    ];

    /**
     * Get the phoneNumber associated with the Contact
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function phoneNumber(): HasOne
    {
        return $this->hasOne(PhoneNumber::class);
    }

    /**
     * Get the owner that owns the Contact
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function stars()
    {
        return $this->morphMany(Star::class, 'starrable');
    }
}
