<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index(){
    return view('frontend.home');
  }
  public function about(){
    return view('frontend.about');
  }
  public function OurCommitment(){
    return view('frontend.comitment');
  }
  public function upCommingEvent(){
    return view('frontend.UpCommingEvent');
  }
  public function tachnicalSupport(){
    return view('frontend.tachnicalSupport');
  }
  public function ClinicalSupport(){
    return view('frontend.ClinicalSupport');
  }
  public function news(){
    return view('frontend.news');
  }
  public function productUpdate(){
    return view('frontend.productUpdate');
  }
  public function products(){
    return view('frontend.products');
  }




  // dashboard page 

  public function dashboard(){
    return view('dashboard.index');
  }
}
