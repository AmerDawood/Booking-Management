<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = ['name','address','city','state','zip_code','country','latitude','longitude','description'];




    public function spaces()
    {
        return $this->hasMany(Space::class, 'place_id');
    }

}
