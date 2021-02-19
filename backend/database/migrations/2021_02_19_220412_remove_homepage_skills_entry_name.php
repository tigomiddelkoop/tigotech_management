<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveHomepageSkillsEntryName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('homepage_skills_entries_name');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('homepage_skills_entries_name', function (Blueprint $table) {
            $table->id();

            $table->integer("skill_id");
            $table->string("name");

            $table->timestamps();
        });
    }
}
