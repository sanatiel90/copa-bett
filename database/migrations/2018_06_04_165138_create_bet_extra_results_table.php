<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetExtraResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bet_extra_results', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_best_player_cup')->nullable();
            $table->foreign('id_best_player_cup')->references('id')->on('players');
            $table->unsignedInteger('id_best_scorer_cup')->nullable();
            $table->foreign('id_best_scorer_cup')->references('id')->on('players');
            $table->unsignedInteger('id_team_champ')->nullable();
            $table->foreign('id_team_champ')->references('id')->on('teams');
            $table->unsignedInteger('id_team_leader_a')->nullable();
            $table->foreign('id_team_leader_a')->references('id')->on('teams');
            $table->unsignedInteger('id_team_leader_b')->nullable();
            $table->foreign('id_team_leader_b')->references('id')->on('teams');
            $table->unsignedInteger('id_team_leader_c')->nullable();
            $table->foreign('id_team_leader_c')->references('id')->on('teams');
            $table->unsignedInteger('id_team_leader_d')->nullable();
            $table->foreign('id_team_leader_d')->references('id')->on('teams');
            $table->unsignedInteger('id_team_leader_e')->nullable();
            $table->foreign('id_team_leader_e')->references('id')->on('teams');
            $table->unsignedInteger('id_team_leader_f')->nullable();
            $table->foreign('id_team_leader_f')->references('id')->on('teams');
            $table->unsignedInteger('id_team_leader_g')->nullable();
            $table->foreign('id_team_leader_g')->references('id')->on('teams');
            $table->unsignedInteger('id_team_leader_h')->nullable();
            $table->foreign('id_team_leader_h')->references('id')->on('teams');
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
        Schema::dropIfExists('bet_extra_results');
    }
}
