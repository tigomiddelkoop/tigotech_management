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
            $table->timestamps();

            $table->string("userId");
            $table->string("channelId");
            $table->string("channelName");
            $table->string("userName");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discord_personal_channel_logs');
    }
}
