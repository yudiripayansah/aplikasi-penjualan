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
            'name'=>'pensil',
            'description'=>'pensil faber-castell',
            'image'=>'faber-castell',
            'price'=>'4000',
            'stock'=>'20',
            'id_category'=>'012',
            'id_group'=>'096',
        ]);
    }
}
