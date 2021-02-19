<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscordPersonalChannelsLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discord_personal_channels_logs', function (Blueprint $table) {
            $table->id();

            $table->string("user_id");
            $table->string("user_name");
            $table->string("channel_id");
            $table->string("channel_name");

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
        Schema::dropIfExists('discord_personal_channels_logs');
    }
}
