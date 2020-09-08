<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = ['Anéis', 'Brincos', 'Colares', 'Pulseiras'];

        foreach ($categorias as $categoria)
        {
            factory(App\Categoria::class)->create([
                'nome' => $categoria,

            ]);
        }
    }
}
