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
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id_admin')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name')->unique();
            $table->string('rank')->default('Новички');
            $table->integer('rating')->default(1);
            $table->integer('total_score')->default(0);
            $table->foreign('user_id_admin')->references('id')->on('users');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->integer('team_id')->unsigned()->nullable();
            $table->foreign('team_id')->references('id')->on('teams');
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
        Schema::dropIfExists('teams');
    }
}
