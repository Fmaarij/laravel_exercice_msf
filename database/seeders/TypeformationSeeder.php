<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeformation')->insert([[
            'nom' => 'Type longue ',
        ],
        [
        'nom' => 'Type courte ',

        ],
        [
            'nom' => 'Type longue ',

        ],
        [
        'nom' => 'Type courte ',

        ],
        [
            'nom' => 'Type longue ',

        ],
        [
        'nom' => 'Type courte',

        ],
        [
            'nom' => 'Type longue ',

        ],
        [
            'nom' => 'Type longue ',

        ],
        [
            'nom' => 'Type longue ',

        ],
        [
            'nom' => 'Type longue ',

        ]
    ]);
    }
    }

