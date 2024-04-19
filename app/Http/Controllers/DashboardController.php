<?php

namespace App\Http\Controllers;

use App\Models\Aplication;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $applications = Aplication::get();
        return view("dashboard", compact("applications"));
    }
}
