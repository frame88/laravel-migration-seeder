<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index {
        $trains = Trains::all();
        $data = ['trains' => $trains];
        return view('home', $data);
    }
}
