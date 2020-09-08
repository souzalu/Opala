<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produto;
use App\Categoria;
use Faker\Generator as Faker;


        $factory->define(Produto::class, function (Faker $faker) {
            return [

                    'nome' => $faker->unique()->name,
                    'descrição' =>  $faker->sentence,
                    'valor' =>  rand(100, 1000),
                    'estoque' =>  rand(10,100),
                    'categoria_id' => factory(App\Categoria::class),
                    'url_img'=> null,

            ];

});
