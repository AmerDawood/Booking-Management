<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;


    protected $fillable = ['name','description','capacity','image_url','amenities','is_available','place_id'];

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }

    public function album()
    {
        return $this->hasMany(Image::class);
    }
}
