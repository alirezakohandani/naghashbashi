<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Manner extends Model
{
    use HasFactory;


    /**
     * The manners that belong to the user.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
