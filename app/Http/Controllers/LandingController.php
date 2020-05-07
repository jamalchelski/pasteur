<?php

namespace App\Http\Controllers;

use App\contact;
use App\Gambar;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing()
    {
        $gambar = Gambar::all();
        return view('landing',compact('gambar'));
    }
    public function contact()
    {
        $contacts = contact::all();
        
        return view('contact',compact('contacts'));
    }
    public function product()
    {
        return view('product');
    }
    public function price()
    {
        return view('price');
    }

}
