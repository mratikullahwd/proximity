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

    public function view(int $id){
        $applications = Aplication::findOrFail( $id );
        return view("view", compact("applications"));
    }
    public function approve(int $id){
        $applications = Aplication::findOrFail( $id );
        $applications->update([ "status" => "Approved" ]);
        return back()->with(["message"=>"Approved", "status"=>"success"]);
    }
    public function inactive(int $id){
        $applications = Aplication::findOrFail( $id );
        $applications->update([ "status" => "inactive" ]);
        return back()->with(["message"=>"User back to Pending Status", "status"=>"danger"]);
    }
    public function delete(int $id){
        $applications = Aplication::findOrFail( $id );
        $applications->delete();
        return back()->with(["message"=>"Application Removed", "status"=>"danger"]);
    }
}
