<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get all of the contacts for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class, 'owner_id');
    }

    /**
     * Get all of the phoneNumbers for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function phoneNumbers(): HasManyThrough
    {
        return $this->hasManyThrough(PhoneNumber::class, Contact::class, 'owner_id');
    }

    public function qualifications(): BelongsToMany
    {
        return $this->belongsToMany(Qualification::class);
    }

    /**
     * Get all of the stars for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stars(): HasMany
    {
        return $this->hasMany(Star::class);
    }

    public function profilePicture()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
