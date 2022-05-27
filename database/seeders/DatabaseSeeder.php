<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

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

        DB::table('admins')->insert([
            'cep' => '00000-000',
            'cpf' => "000.000.000.00",
            'birth_date' => "2000-01-01",
            'address' => "Rua Exp Francisco P dos Santos",
            'number' => "1109",
            'phone' => "(41) 99999-9999",
            'user_id' => "1"
        ]);
    }
}
