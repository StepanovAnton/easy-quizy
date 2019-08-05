<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Миграцию создает список команд
 * Class CreateGameTeamsTable
 */
class CreateGameTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id_admin');
            $table->timestamps();
            $table->softDeletes();
            $table->string('name');
            $table->string('rank')->default('Новички');
            $table->integer('rating')->default(1);
            $table->integer('total_score')->default(0);
            $table->foreign('user_id_admin')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_teams');
    }
}
