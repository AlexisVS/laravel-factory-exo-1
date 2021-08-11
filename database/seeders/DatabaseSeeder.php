<?php

namespace Database\Seeders;

use App\Models\Eleves;
use Database\Factories\ElevesFactory;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
            BatimentsSeeder::class,
            FormationsSeeder::class,
            TypeFormationsSeeder::class
        ]);
        Eleves::factory()->count(50)->create();
    }
}
