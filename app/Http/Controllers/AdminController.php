<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Utilities\Files;
use App\Model\Slider;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backEnd.Dashboard');
    }
    public function slider(){
      $slider = Slider::paginate(5);
        return view('backEnd.createSilder',['sliders' => $slider]);
    }
    public function createSlide(Request $request){
      $slider = new Slider;
      if($request->hasFile('imageSlide') && $request->hasFile('backgroundSlide')){
        $slider->imageSlide = Files::saveUploadImage('imageSlide',Slider::getPrefixImageName(),Slider::getImageBasePath());
        $slider->backgroundSlide = Files::saveUploadImage('backgroundSlide',Slider::getPrefixImageName(),Slider::getImageBasePath());
        $slider->title = $request->get('title');
        $slider->subTitle = $request->get('subTitle');
        $slider->description = $request->get('description');
        $slider->save();

        return redirect('/admin/slider') ;
      }
      return 'fail';

}

}
