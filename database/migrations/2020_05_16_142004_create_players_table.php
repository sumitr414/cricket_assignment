<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('team_id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('imageUri');
            $table->string('playerJerseyNo');
            $table->string('country');
            $table->integer('matches')->nullable()->unsigned();
            $table->integer('runs')->nullable()->unsigned();
            $table->integer('highestScore')->nullable()->unsigned();
            $table->integer('fifties')->nullable()->unsigned();
            $table->integer('hundreds')->nullable()->unsigned();
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
        Schema::dropIfExists('players');
    }
}
