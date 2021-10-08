<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
class CarsController extends Controller
{
    public function index(Request $request)
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
        $searchTerm = $request->input('searchTerm');
        
        if($searchTerm != null || $status != null){
            if($searchTerm != null && $status == null ){
                $cars = Car::where('title', 'like', '%'.$searchTerm.'%')->orWhere('producer', 'like', '%'.$searchTerm.'%')->get();
            }
            else if($searchTerm == null && $status == "all"){
                $cars = Car::getAllCars();
            }
            else {
                $cars = Car::filterCarsBySoldStatus($status)->get();
                
            }
        }

        // if($status  == 'all' || $status == null ){
        //     $cars = Car::getAllCars();
        // }else { 
        //     $cars = Car::filterCarsBySoldStatus($status)->get();
        // }
            
        

       
        
        return view('cars.index', compact('cars'));
    }

    
}
