<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;
use Validator;

class menuTableSeeder extends Seeder
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
        DB::table('menu')->insert([
            'id_parent'=>'2',
            'label'=>'contoh2',
            'link'=>'contoh2.com',
            'image'=>'contoh2.png',
        ]);
        DB::table('menu')->insert([
            'id_parent'=>'3',
            'label'=>'contoh3',
            'link'=>'contoh3.com',
            'image'=>'contoh3.png',
        ]);

    }
}
