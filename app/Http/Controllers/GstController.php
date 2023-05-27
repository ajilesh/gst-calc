<?php

namespace App\Http\Controllers;


use App\Helpers\Gst;
use Illuminate\Http\Request;

class GstController extends Controller
{
    public function index()
    {
        return view('gstCalculation');
    }
    public function gstCalculation(Gst $gst,Request $request)
    {
        //dd($request->input());
        $request->validate([
          'amount' => 'required | numeric',
          'percentage' => 'required | numeric | max:99'
        ]);
        $amount = $request->input('amount');
        $percentage = $request->input('percentage');
        $array = $gst -> index($amount,$percentage);

        return view('gstCalculation')->with('data',$array);

    }
}
