<?php

namespace App\Http\Controllers;

use App\Welcome;
use Illuminate\Http\Request;



class WelcomeController extends Controller
{
    public function add_expanse(){
        $welcome = Welcome::all();
        return view('includes.add-expanse', compact('welcome'));
    }

    public function saveExpanse(Request $request){

        if (count($request->date) > 0) {
            foreach ($request->date as $key => $v) {
                $data = array(
                    'date' => $request->date[$key],
                    'product_name' => $request->product_name[$key],
                    'in_time' => $request->in_time[$key],
                    'out_time' => $request->out_time[$key],
                    'total_product' => $request->total_product[$key]
                );
                Welcome::insert($data);
            }
        }
        return redirect()->back()->with('success','Data Inserted Successfully');
    }
}
