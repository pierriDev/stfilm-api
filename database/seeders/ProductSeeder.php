<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            // ID 1
            "title" => "Caixa de Calor 110/220V",
            "image" => "",
            "description" => "Caixa de Calor Portátil \n Acompanha:\n Lâmpada 110 ou 220 V \n 04 Lâminas de Vidro com película",
            "value" => 350.00,
            "weight" => "3,00 KG",
            "dimensions" => "30 x 20 x 30 cm",
            "category_id" => 1,
            
        ]);

        DB::table('products')->insert([
            // ID 2
            "title" => "Espátula Corintiana",
            "image" => "",
            "description" => "<p>Espátula plástica corintiana 6\"</p> \n Uma ferramenta altamente recomendada para instalações de películas automotivas, composta por material rigido de um lado e rodo de borracha de outro. \n Recomendado uso em aplicações de películas automotivas, segurança, decorativas e arquitetura.",
            "value" => 25.00,
            "weight" => "0,30 KG",
            "dimensions" => "20 x 10 x 5 cm",
            "category_id" => 2,
        ]);

        DB::table('products')->insert([
            // ID 3
            "title" => "Aparador de Espátula",
            "image" => "",
            "description" => "<p>Afiador plástico para espátulas. </p> Ferramenta adequada para maximizar a vida útil das espátulas! Produto ideal para manter a borda afiada em espátulas rígidas, com vantagem de restaurar sua espátula para mesma condição como quando a comprou. \n Recomendado uso em espátulas que apresentem ranhuras ou desgaste em sua borda. O seu uso previne a criação de riscos, cortes e arranhões desnecessários na película em decorrência de espátulas desgastadas. \n Recomendado uso em todas as espátulas rigidas",
            "value" => 75.00,
            "weight" => "0,100 KG",
            "dimensions" => "20 x 10 x 5 cm",
            "category_id" => 2,
        ]);
        DB::table('products')->insert([
            // ID 4
            "title" => "Espátula Conquistador",
            "image" => "",
            "description" => "<p>Espátula plástica conquistador.</p> A espátula Conquistador é uma ferramenta muito popular entre os instaladores de flimes automotivo \n Utilizado na remoção da sujeira de janelas laterais, mas também tem uma ponta afiada para remover a água de curvas apertadas durante as instalações de películas automotivas. \n Recomendado uso em aplicações de películas automotivas. ",
            "value" => 45.00,
            "weight" => "0,60 KG",
            "dimensions" => "20 x 10 x 5 cm",
            "category_id" => 2,
        ]);
        DB::table('products')->insert([
            // ID 5
            "title" => "Espátula Gold 3M",
            "image" => "",
            "description" => "<p>Espátula plástica 3M dourada.</p> Espátula utilizada em aplicação em janelas laterais, material de composição mais suave que a espátula cinza. \n Recomendado uso para aplicações em películas automotivas e segurança.",
            "value" => 70.00,
            "weight" => "0,100 KG",
            "dimensions" => "20 x 10 x 5 cm",
            "category_id" => 2,
        ]);
        DB::table('products')->insert([
            // ID 6
            "title" => "Espátula Tiazinha",
            "image" => "",
            "description" => "<p>Espátula teflon modelo tiazinha.</p> A espátula tiazinha é perfeita para a instalação de películas nas janelas pequenas com cantos arredondados. \n Recomendado uso em aplicações de películas automotivas, segurança, decorativas e arquitetura.",
            "value" => 16.00,
            "weight" => "0,30 KG",
            "dimensions" => "20 x 10 x 5 cm",
            "category_id" => 2,
        ]);
        DB::table('products')->insert([
            // ID 7
            "title" => "Esquadro 45/90 Grande",
            "image" => "",
            "description" => "<p>Gabarito de circulos triangular grande.</p> Gabarito em alumínio de 12” com 45° / 90° graus, com vários diâmetros entre 1/16″ a 1 3/8″ de circulos. \n Recomendado uso para aplicações em películas automotivas, segurança, decorativas e arquitetura.",
            "value" => 175.00,
            "weight" => "0,150 KG",
            "dimensions" => "40 x 10 x 5 cm",
            "category_id" => 2,
        ]);
        DB::table('products')->insert([
            // ID 8
            "title" => "Lâmina de estilete Cx/50 un. OLFA",
            "image" => "",
            "description" => "<p>Lâmina em aço inoxidável OLFA para uso em estilete.</p> Embalagem com 50 lâminas de substituição em estiletes OLFA e Estilete Pro A e compatível com outros estiletes também. Produzido em aço inoxidável. \n Recomendado uso para aplicações em películas automotivas, segurança, decorativas e arquitetura.",
            "value" => 280.00,
            "weight" => "0,100 KG",
            "dimensions" => "20 x 10 x 5 cm",
            "category_id" => 2,
        ]);
        DB::table('products')->insert([
            // ID 9
            "title" => "Blue Max (Refil)",
            "image" => "",
            "description" => "<p>Rodo de borracha 5″ tipo Azul Max.</p> Rodo ideal para instalação de películas em vidros planos.\n Este refil quando utilizado com o cabo de fixação Unger garante a remoção da água em filmes mais espessos. \n Recomendado uso em aplicações de películas automotivas e segurança.",
            "value" => 100.00,
            "weight" => "0,30 KG",
            "dimensions" => "20 x 10 x 5 cm",
            "category_id" => 2,
        ]);
        DB::table('products')->insert([
            // ID 9
            "title" => "Batedor (Bico de Pato)",
            "image" => "",
            "description" => "<p>Espátula plástica tipo batedor.</p> A espátula tipo batedor é usada para a limpeza de cantos e ao longo das juntas da janela do veículo, removendo a água e facilmente chegar aos cantos das janelas traseirase bordas afiadas durante a instalação de películas automotivas. \n Recomendado uso em aplicações de películas automotivas e segurança.",
            "value" => 50.00,
            "weight" => "0,30 KG",
            "dimensions" => "20 x 10 x 5 cm",
            "category_id" => 2,
        ]);
    }
}
