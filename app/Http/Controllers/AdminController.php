<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Price;
use Validator;
use DB;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::all();
        return view('admin/index', compact('prices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'black_home' => 'required|integer',
            'white_home' => 'required|integer',
            'black_comercial' => 'required|integer',
            'white_comercial' => 'required|integer',
        ];

        try {
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withInput($request->all())
                    ->withErrors($validator);
            }
            $price = Price::find($id);
            $price->black_home = $request->black_home;
            $price->white_home = $request->white_home;
            $price->black_comercial = $request->black_comercial;
            $price->white_comercial = $request->white_comercial;
            $price->save();
            DB::commit();
        } catch (Exception $e) {
                DB::rollBack();
            }

        return redirect()->back()->with('success', "წარმატებით შესწორდა ბაზაში!");
    }
}
