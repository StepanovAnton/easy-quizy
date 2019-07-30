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
        Schema::create('game_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->dateTime('start_game'); // Дата начала игры
            $table->string('location'); // Месторасположение
            $table->boolean('reserve'); // Флаг есть ли месста
            $table->integer('price'); // Стоимость игры
            $table->string('label'); // Лейбл
            $table->string('venue'); // Место проведения игры
            $table->string('payment_type'); // Тип оплаты
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
