<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeFormationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_formations')->insert([
            [
                "nom" => "MolenGeek",
            ],
            [
                "nom" => "MolenGeek",
            ],
            [
                "nom" => "MolenGeek",
            ],
            [
                "nom" => "MolenGeek",
            ],
            [
                "nom" => "MolenGeek",
            ],
            [
                "nom" => "MolenGeek",
            ],
            [
                "nom" => "MolenGeek",
            ],
            [
                "nom" => "MolenGeek",
            ],
            [
                "nom" => "MolenGeek",
            ],
            [
                "nom" => "MolenGeek",
            ],
        ]);
    }
}
