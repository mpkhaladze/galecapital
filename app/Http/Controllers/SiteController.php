<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{
    public function index($lang = 'ge'){
        
        return view('site.index')->with('lang',$lang);
    }
}
