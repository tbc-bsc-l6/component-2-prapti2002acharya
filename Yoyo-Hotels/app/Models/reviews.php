<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_id',
        'name',
        'email',
        'review',
        'created_at',
        
    ];

    public function rooms(){
        return $this->hasOne('App\Models\Room','id','room_id');
    }

  
}
