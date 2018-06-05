<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goals_team_home')->nullable();
            $table->integer('goals_team_visit')->nullable();
            $table->dateTime('game_date');
            $table->unsignedInteger('id_best_player')->nullable();
            $table->foreign('id_best_player')->references('id')->on('players');
            $table->unsignedInteger('id_team_home');
            $table->foreign('id_team_home')->references('id')->on('teams');
            $table->unsignedInteger('id_team_visit');
            $table->foreign('id_team_visit')->references('id')->on('teams');
            $table->unsignedInteger('rodada_id');
            $table->foreign('rodada_id')->references('id')->on('rodadas');
            $table->unsignedInteger('id_first_score')->nullable();
            $table->foreign('id_first_score')->references('id')->on('players');
            $table->unsignedInteger('result_id')->nullable();
            $table->foreign('result_id')->references('id')->on('results');
            
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
        Schema::dropIfExists('games');
    }
}
