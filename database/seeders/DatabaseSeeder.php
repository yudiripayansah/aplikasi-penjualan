<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
    }
}
