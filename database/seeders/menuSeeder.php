<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'id_parent'=>'1',
            'label'=>'contoh1',
            'link'=>'contoh.com',
            'image'=>'contoh.png',
        ]);
    }
}
