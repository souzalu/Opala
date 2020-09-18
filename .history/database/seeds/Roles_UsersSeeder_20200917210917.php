<?php

use Illuminate\Database\Seeder;

class Roles_UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles_users')->insert([
            'user_id'=> '1',
            'roles_id'=> '2',
        ]);
    }
}
