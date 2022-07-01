<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
