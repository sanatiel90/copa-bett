<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('points_gained')->default(0);
            $table->integer('goals_team_home');
            $table->integer('goals_team_visit');
            $table->unsignedInteger('id_result');
            $table->foreign('id_result')->references('id')->on('results');
            $table->boolean('finalizada')->nullable();
            $table->unsignedInteger('id_best_player')->nullable();
            $table->foreign('id_best_player')->references('id')->on('players');
            $table->unsignedInteger('id_first_score')->nullable();
            $table->foreign('id_first_score')->references('id')->on('players');
            $table->unsignedInteger('id_game');
            $table->foreign('id_game')->references('id')->on('games');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('bets');
    }
}
