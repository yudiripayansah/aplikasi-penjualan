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
            'id_purchase' => 2,
            'id_product' => 2,
            'price' => 175000,
            'description' => 'laptop'
        ]);
    }
}
