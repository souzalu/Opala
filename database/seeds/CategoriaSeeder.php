<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 4; $i++) {
            DB::table('categorias')->insert([
                'nome' => Str::random(1, 4),

            ]);
        }
    }
}
