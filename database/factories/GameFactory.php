<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'name' => 'Easy quizee #' . rand(1, 10),
        'start_game' => $faker->dateTimeBetween('+1 week', '+1 month')->format('Y-m-d H:i:s'),
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'reserve' => 1,
        'price' => rand(0, 1000),
        'label' => rand(0, 1) ? 'classic' : 'pop',
        'place' => 'Дорогая, я перезвоню',
    ];
});
