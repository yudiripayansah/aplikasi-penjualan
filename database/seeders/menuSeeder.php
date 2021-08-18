<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;

class menuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'id_parent'=>'1A',
            'label'=>'expl',
            'link'=>'expl',
            'image'=>'expl',
        ]);
    }
}
