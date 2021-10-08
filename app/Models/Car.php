<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public static function getAllCars(){
        return self::all();
    }

    public static function getOtherCars($id){
        return self::where('id', 'not like', $id);
    }

    public static function filterCarsBySoldStatus($status){
        return self::where('is_sold', 'like', $status);
    }
}
