<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Миграция создает запись на игры
 * Class CreateTeamGameRecordsTable
 */
class CreateTeamGameRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_records', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->boolean('solo');
            $table->integer('user_tel');
            $table->string('user_email');
            $table->string('user_name');
            $table->boolean('records_in_reserve');
            $table->integer('user_id')->unsigned();
            $table->integer('game_id')->unsigned();
            $table->integer('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('game_id')->references('id')->on('games_list');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('game_records');
    }
}
