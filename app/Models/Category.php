<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillables = [
        'name',
        'slug',
    ];

    /**
     * Get all of the challenge for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function challenges(): HasMany
    {
        return $this->hasMany(Challenge::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
