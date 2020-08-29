<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Type\Decimal;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('users')->insert([
        //     'nome' => 'Pulseira Prateada',
        //         'valor' => 'R$ 10,00',
        //         'descrição' => 'Pulseira prateada de coração feminina',
        //         'estoque' => rand(3, 50),
        //         'categoria_id' => Str::random(1, 4)
        // ]);

        for ($i = 0; $i < 10; $i++) {

            DB::table('produtos')->insert([
                'nome' => Str::random(10),
                'valor' => rand(5, 999.99),
                'descrição' => Str::random(30),
                'estoque' => rand(3, 50),
                'categoria_id' => rand(1,4)
            ]);
        }
    }
}
