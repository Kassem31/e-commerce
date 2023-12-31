<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory, SearchableTrait;
    protected $guarded = [];

    public $searchable = [
        'columns'=> [
            'countries.name' => 10,
        ]
    ];

    public $timestamps = false;

    public function status()
    {
        return $this->status ? 'Active' : 'Inactive';
    }

    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }

    // public function addresses(): HasMany
    // {
    //     return $this->hasMany(UserAddress::class);
    // }
}
