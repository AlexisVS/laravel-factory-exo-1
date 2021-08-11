<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatimentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('batiments')->insert([
            [
                "nom" => "MolenGeek",
                "description" => "Lieu de rassemblement pour le personnelle et les élèves de MvcolenGeek",
            ],
        ]);
    }
}
