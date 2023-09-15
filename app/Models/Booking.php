<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;



    protected $fillable = ['space_id' , 'user_id' ,'start_date' ,'end_date' ,'guest_count' ,'contact_phone' ,'special_requests' ,'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
