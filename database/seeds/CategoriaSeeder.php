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


            DB::table('categorias')->insert([
                'nome' => 'Anéis'

            ]);


            DB::table('categorias')->insert([
                'nome' => 'Brincos'

            ]);


            DB::table('categorias')->insert([
                'nome' => 'Colares'

            ]);

            DB::table('categorias')->insert([
                'nome' => 'Pulseiras'

            ]);
}

}


