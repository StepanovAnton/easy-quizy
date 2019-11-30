<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Миграция создает список игр
 * Class CreateGameListsTable
 */
class CreateGameListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games_list', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->dateTime('start_game'); // Дата начала игры
            $table->string('latitude'); // Широта
            $table->string('longitude'); // Долгота
            $table->boolean('reserve')->default(1); // Флаг есть ли места
            $table->integer('price'); // Стоимость игры
            $table->string('label')->default('Classic'); // Лейбл
            $table->string('place'); // Место проведения игры
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_lists');
    }
}
