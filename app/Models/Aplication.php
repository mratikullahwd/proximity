<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplication extends Model
{
    use HasFactory;

    protected $table = "applications";

    protected $fillable = [
        "name",
        "phone",
        "email",
        "minecraft_username",
        "discord_tag",
        "age",
        "applying_for",
        "experience",
        "skills",
        "working_hour",
        "why_join_us",
        "suggestions_for_us",
        "development_experience",
        "known_programming",
        "handling_challenging_situation",
        "strategies_of_updates_and_trends"
    ];

}
