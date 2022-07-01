<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class OnSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('on_sales')->insert([
            // ID 1
            "active" => true,
            "value" => 300.00,
            "product_id" => "1",
        ]);
        
        DB::table('on_sales')->insert([
            // ID 2
            "active" => true,
            "value" => 20.00,
            "product_id" => "2",
        ]);
    }
}
