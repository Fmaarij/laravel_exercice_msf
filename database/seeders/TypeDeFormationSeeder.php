<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeDeFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typedeformations')->insert([[
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
