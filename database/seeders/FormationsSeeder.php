<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('formations')->insert([[
            'nom' => 'Coding School 36 ',
            'description' => "Commence le 24/05/2024",
        ],
        [
        'nom' => 'Marketing Lab 1 ',
        'description' => "Commence le 24/07/2024",
        ],
        [
            'nom' => 'Coding School 37 ',
            'description' => "Commence le 24/08/2024",
        ],
        [
        'nom' => 'Coding School 38 ',
        'description' => "Commence le 24/09/2024",
        ],
        [
            'nom' => 'Marketing Lab 2 ',
            'description' => "Commence le 24/06/2024",
        ],
        [
        'nom' => 'Marketing Lab 3 ',
        'description' => "Commence le 24/08/2024",
        ]
    ]);
    }
}
