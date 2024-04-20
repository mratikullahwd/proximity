<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("phone");
            $table->string("email");
            $table->string("minecraft_username");
            $table->string("discord_tag");
            $table->string("age");
            $table->string("applying_for");
            $table->string("experience")->nullable();
            $table->string("skills")->nullable();
            $table->string("working_hour");
            $table->string("why_join_us");
            $table->string("suggestions_for_us");
            $table->string("development_experience");
            $table->string("handling_challenging_situation");
            $table->string("known_programming")->nullable();
            $table->string("strategies_of_updates_and_trends");
            $table->string("status")->default('inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
