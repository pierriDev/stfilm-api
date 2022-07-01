<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

use Database\Seeders\AdminSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\OnSaleSeeder;
use Database\Seeders\StockSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        
        
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "financeiro@stfilm.com.br",
            'password' => Hash::make('123456'),
            'isAdmin' => true,
        ]);
        $this->call(AdminSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(OnSaleSeeder::class);
        $this->call(StockSeeder::class);
    }
}
