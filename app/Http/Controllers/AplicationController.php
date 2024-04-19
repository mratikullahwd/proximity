<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AplicationController extends Controller
{
    public function index(){
        return view('apply.index');
    }

    public function store(Request $request){
        $request->validate([
            "name" => "required",
            "phone" => "required|numeric",
            "age" => "required",
        ]);
    }

}
