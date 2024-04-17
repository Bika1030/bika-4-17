<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;


    public function manufacturer ()
    {
        return $this->hasMany(Manufacturers::class, 'car_id' ,  'id');
    }


    public function registration ()
    {
        return $this->hasMany(Manufacturers::class, 'car_id' ,  'id');
    }
}
