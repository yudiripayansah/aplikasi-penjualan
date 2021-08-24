<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'flashdisk',
            'description'=>'flashdisk sandisk',
            'image'=>'sandisk',
            'price'=>'95000',
            'stock'=>'50',
            'id_category'=>'172',
            'id_group'=>'453',
        ]);
    }
}
