<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    //
    function index()
    {
        $cities = City::all();
        return view("cities.index", [
            "cities" => $cities,
        ]);
    }
}
