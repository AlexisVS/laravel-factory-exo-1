<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                "nom" => "Coding School 1",
                "description" => "BLABLABLABLABLA"
            ],
            [
                "nom" => "Coding School 2",
                "description" => "BLABLABLABLABLA"
            ],
            [
                "nom" => "Coding School 3",
                "description" => "BLABLABLABLABLA"
            ],
            [
                "nom" => "Coding School 4",
                "description" => "BLABLABLABLABLA"
            ],
            [
                "nom" => "Coding School 5",
                "description" => "BLABLABLABLABLA"
            ],
            [
                "nom" => "Coding School 6",
                "description" => "BLABLABLABLABLA"
            ],
            [
                "nom" => "Coding School 7",
                "description" => "BLABLABLABLABLA"
            ],
            [
                "nom" => "Coding School 8",
                "description" => "BLABLABLABLABLA"
            ],
            [
                "nom" => "Coding School 9",
                "description" => "BLABLABLABLABLA"
            ],
            [
                "nom" => "Coding School 10",
                "description" => "BLABLABLABLABLA"
            ],
        ]);
    }
}
