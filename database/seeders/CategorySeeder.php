<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            // ID 1
            "title" => "Caixa de Calor",
            "description" => "Caixa de calor – 110/220 V",
            "image" => "",
        ]);
        
        DB::table('categories')->insert([
            // ID 2
            "title" => "Ferramentas",
            "description" => "",
            "image" => "",
        ]);

        DB::table('categories')->insert([
            // ID 3
            "title" => "Fibra de Carbono",
            "description" => "",
            "image" => "",
        ]);

        DB::table('categories')->insert([
            // ID 4
            "title" => "Películas Arquitetura",
            "description" => "",
            "image" => "",
        ]);

        DB::table('categories')->insert([
            // ID 5
            "title" => "Películas Automotivas",
            "description" => "",
            "image" => "",
        ]);

        DB::table('categories')->insert([
            // ID 6
            "title" => "Películas de Segurança",
            "description" => "",
            "image" => "",
        ]);

        DB::table('categories')->insert([
            "title" => "Películas Decorativa",
            "description" => "",
            "image" => "",
        ]);

        DB::table('categories')->insert([
            // ID 8
            "title" => "Receptor Digital TV Automativo",
            "description" => "",
            "image" => "",
        ]);
    }
}
