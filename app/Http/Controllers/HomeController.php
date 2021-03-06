<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Slider;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   $slider = Slider::all();
        return view('frontEnd.home',['sliders' => $slider]);
    }
}
