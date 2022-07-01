<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('stocks')->insert([
            // ID 1
            "quantity" => 2,
            "sku" => "",
            "last_buy" => "2022-06-04",
            "product_id" => "1",
        ]);
        
        DB::table('stocks')->insert([
            // ID 2
            "quantity" => 8,
            "sku" => "ECR-010",
            "last_buy" => "2022-06-04",
            "product_id" => "2",
        ]);
        DB::table('stocks')->insert([
            // ID 3
            "quantity" => 6,
            "sku" => "APE-001",
            "last_buy" => "2022-06-04",
            "product_id" => "3",
        ]);
        DB::table('stocks')->insert([
            // ID 4
            "quantity" => 5,
            "sku" => "ESC-009",
            "last_buy" => "2022-06-04",
            "product_id" => "4",
        ]);
        DB::table('stocks')->insert([
            // ID 5
            "quantity" => 10,
            "sku" => "EGO-012",
            "last_buy" => "2022-06-04",
            "product_id" => "5",
        ]);
        DB::table('stocks')->insert([
            // ID 6
            "quantity" => 4,
            "sku" => "ETI-014",
            "last_buy" => "2022-06-04",
            "product_id" => "6",
        ]);
        DB::table('stocks')->insert([
            // ID 7
            "quantity" => 1,
            "sku" => "EQG-016",
            "last_buy" => "2022-06-04",
            "product_id" => "7",
        ]);
        DB::table('stocks')->insert([
            // ID 8
            "quantity" => 5,
            "sku" => "LES-024",
            "last_buy" => "2022-06-04",
            "product_id" => "8",
        ]);
        DB::table('stocks')->insert([
            // ID 9
            "quantity" => 0,
            "sku" => "RBM-004",
            "last_buy" => "2022-06-04",
            "product_id" => "9",
        ]);
        DB::table('stocks')->insert([
            // ID 10
            "quantity" => 0,
            "sku" => "BBP-002",
            "last_buy" => "2022-06-04",
            "product_id" => "10",
        ]);

        
    }
}
