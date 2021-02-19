<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepageProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage_projects', function (Blueprint $table) {
            $table->id();

            $table->string("name");
            $table->string("slug");
            $table->string("images");
            $table->string("website");
            $table->string("short_description");
            $table->longText("long_description");
            $table->string("languages");
            $table->string("source_control");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homepage_projects');
    }
}
