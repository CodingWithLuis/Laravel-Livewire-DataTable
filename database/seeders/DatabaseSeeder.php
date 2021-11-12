<?php

namespace Database\Seeders;

use App\Models\Director;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Director::factory(5)->create();
        Movie::factory(25)->create();

        $this->call([
            UserSeeder::class,
        ]);
    }
}
