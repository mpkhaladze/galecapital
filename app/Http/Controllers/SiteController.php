<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Price;



class SiteController extends Controller
{
    public function index(){
        $prices = Price::all();
        return view('site.index', compact('prices'));
    }
}
