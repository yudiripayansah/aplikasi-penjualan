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
            'id_purchase' => 3,
            'id_product' => 3,
            'price' => 250000,
            'description' => 'buku'
        ]);
    }
}
