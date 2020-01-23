<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\CarDelete;

class CarController extends Controller
{
    //
    public function index() {

        $cars = Car::paginate(10);

        return view('pages.cars-index', compact('cars'));
    }

    public function show($id) {

        $car = Car::findOrFail($id);

        return view('pages.car-show', compact('car'));

    }
}
