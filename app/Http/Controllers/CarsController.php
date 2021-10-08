<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::getAllCars();

        return view('cars.index', compact('cars'));
    }

    public function show(Car $car)
    {
        $otherCars = Car::getOtherCars($car->id)->get();
    
        return view('cars.show', compact('car', 'otherCars'));
    }

    public function filter(Request $request){
        
        $status = $request->input('status');
        if($status  == 'all'){
            $cars = Car::getAllCars();
        }else { 
            $cars = Car::filterCarsBySoldStatus($status)->get();
        }
        
        return view('cars.index', compact('cars'));
    }

    
}
