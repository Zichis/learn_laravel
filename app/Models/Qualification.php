<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
