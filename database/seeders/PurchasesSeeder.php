<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purchases')->insert([
            'name'=>'baju',
            'total_item'=>10,
            'total_price'=>100000,
            'description'=>'baju hiraeth',
            'date'=>'2021-06-12',
            'status'=>'tersedia'
        ]);
    }
}
