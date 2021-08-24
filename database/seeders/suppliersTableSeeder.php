<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class suppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'name'=>'sepatu adidas',
            'email'=>'muhammadabiddhia@gmail.com',
            'address'=>'perum delivina',
            'phone'=>'082299004628',
            'image'=>'adidas samba',
        ]); 
    }
}
