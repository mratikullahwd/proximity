<?php

namespace App\Http\Controllers;

use App\Models\Aplication;
use Illuminate\Http\Request;

class AplicationController extends Controller
{
    public function index(){
        return view('apply.index');
    }

    public function store(Request $request){
        $request->validate([
            "name" => "required",
            "phone" => "required",
            "age" => "required",
            "email" => "required",
            "minecraft_username" => "required",
            "discord_tag" => "required",
            "applying_for" => "required",
            "experience" => "required",
            "skills" => "required",
            "working_hour" => "required",
            "why_join_us" => "required",
            "suggestions_for_us" => "required",
            // "development_experience" => "nullable",
            // "known_programming" => "nullable",
            "handling_challenging_situation" => "required",
            "strategies_of_updates_and_trends" => "required",
        ]);


        $application = new Aplication();

        $application->create([
            "name"=> $request->name,
            "phone"=> $request->phone,
            "age"=> $request->age,
            "email"=> $request->email,
            "minecraft_username"=> $request->minecraft_username,
            "discord_tag"=> $request->discord_tag,
            "applying_for"=> $request->applying_for,
            "experience"=> $request->experience,
            "skills"=> $request->skills,
            "working_hour"=> $request->working_hour,
            "why_join_us"=> $request->why_join_us,
            "suggestions_for_us"=> $request->suggestions_for_us,
            "development_experience"=> $request->development_experience,
            "known_programming"=> $request->known_programming,
            "handling_challenging_situation"=> $request->handling_challenging_situation,
            "strategies_of_updates_and_trends"=> $request->strategies_of_updates_and_trends,
        ]);

        return redirect()->route('index')->with(["message"=>"Your Application Is submitted. We will contact to you as soon as possible!","status"=>"success"]);

    }

}
