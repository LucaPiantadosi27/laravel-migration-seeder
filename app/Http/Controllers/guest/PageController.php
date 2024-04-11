<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller

{
    public function index() {

     
        $trains = Train::whereDate('departure', Carbon::today())->get();

        return view('home', compact('trains'));
    }
}