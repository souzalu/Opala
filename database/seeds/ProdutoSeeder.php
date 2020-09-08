<?php

use App\Categoria;
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
        $produtos = factory(App\Produto::class, 10)->create();
    }
}




