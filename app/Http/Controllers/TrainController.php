<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    //
    public function index()
    {

    $trains = Train::all();

    $todayTrains = Train::where('data_partenza', '2024-07-18')->get();

    return view('trains.index', compact('trains', 'todayTrains'));


    }

}