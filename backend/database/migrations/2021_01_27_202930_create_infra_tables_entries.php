<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfraTablesEntries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infra_tables_entries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer("infra_table_id");
            $table->string("name");
            $table->string("image");
            $table->boolean("name_override");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infra_tables_entries');
    }
}
