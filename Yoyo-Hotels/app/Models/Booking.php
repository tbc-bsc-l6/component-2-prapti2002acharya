<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $hidden = [
        'room_id',
        'user_id',
        'name',
        'email',
        'phone',
        'start_date',
        'end_date',
        'total_price',
        'room_title',
        
    ];

    public function room(){
        return $this->hasOne('App\Models\Room','id','room_id');
    }

    public function rooms(){
        return $this->hasOne('App\Models\User','id','user_id');
    }

    

}
