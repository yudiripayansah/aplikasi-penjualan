<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'id_customer'=>'029',
            'type'=>'alat musik',
            'nama'=>'gitar',
            'address'=>'griya cibinong indah',
            'email'=>'pratiwiwuan59@gmail.com',
            'phone'=>'089507891023',
            'total_item'=>'1',
            'total_price'=>'880.000',
            'descreption'=>'gitar cowboy 325NS',
            'status'=>'pesanan',
        ]);
    }
}
