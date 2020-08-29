<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Vicente',
            'email' => 'vicente'.'@gmail.com',
            'password' => Hash::make('123456')
        ]);

        for ($i = 1; $i < 10; $i++) {

            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('password'),
            ]);
        }


    }
}
