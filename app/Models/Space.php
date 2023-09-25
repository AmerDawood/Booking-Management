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



    public function place()
    {
        return $this->belongsTo(Place::class, 'place_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }


        public function reviews()
    {
        return $this->hasMany(Review::class);
    }


}
