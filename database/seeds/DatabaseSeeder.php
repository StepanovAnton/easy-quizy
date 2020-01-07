<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Game;
use App\Models\Team;
use App\Models\TeamUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create();
        factory(Game::class, 10)->create();
        factory(Team::class, 1)->create();
        factory(TeamUser::class, 1)->create();
    }
}
