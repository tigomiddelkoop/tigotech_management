<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTodoListsEntries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_todo_lists_entries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer("todoListId");
            $table->string("task");
            $table->boolean("done");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_todo_lists_entries');
    }
}
