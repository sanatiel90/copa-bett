<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewFields1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //migration que adiciona novos campos em tabelas diferentes
    public function up()
    {
        Schema::table('teams', function(Blueprint $table){
            $table->string('group')->nullable();
        });

        Schema::table('players', function(Blueprint $table){
            $table->string('position')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
