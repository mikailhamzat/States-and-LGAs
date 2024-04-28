<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    protected $fillable = [
        'name',
    ];

    public function local_government_areas(): HasMany
    {
        return $this->hasMany(LocalGovernmentArea::class);
    }
}
