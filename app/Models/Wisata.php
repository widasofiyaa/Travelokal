<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }
    protected $fillable = [
        'image',
        'title',
        'locate',
        'description',
        'type',
        'location',
        'duration',
        'price',
        'maps',
    ];
}
