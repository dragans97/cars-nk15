<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
class CarsController extends Controller
{
    public function index(){
        $cars = Car::getAllCars();
        return view('cars.index', compact('cars'));
    }
}
