<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purchase_items')->insert([
            'id_purchase' => 4,
            'id_product' => 4,
            'price' => 500000,
            'description' => 'motor'
        ]);
    }
}
