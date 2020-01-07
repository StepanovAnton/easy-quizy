<?php

/** @var Factory $factory */

use App\Models\TeamUser;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(TeamUser::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'team_id' => 1,
    ];
});
