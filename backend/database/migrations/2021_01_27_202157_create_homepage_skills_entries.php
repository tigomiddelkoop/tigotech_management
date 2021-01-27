<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepageSkillsEntries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage_skills_entries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer("skillsId");
            $table->string("names");
            $table->string("date");
            $table->integer("confidence");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homepage_skills_entries');
    }
}
