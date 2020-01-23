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

    public function destroy($id) {

        $car = Car::findOrFail($id);
        $car -> delete();
        Mail::to('prova@mail.com')->send(new CarDelete($car-> name,$car -> color, $car -> engine, $car -> price));
        return redirect() -> route('cars.index');
    }
}
