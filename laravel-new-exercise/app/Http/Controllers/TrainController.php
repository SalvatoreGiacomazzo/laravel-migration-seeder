<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    //
    public function index()
    {
        $trains = Train::where("departure_day", "2023-10-27")->get();
        dd($trains);
        return $trains;
    }
}
