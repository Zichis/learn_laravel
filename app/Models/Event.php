<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function stars(): MorphMany
    {
        return $this->morphMany(Star::class, 'starrable');
    }
}
