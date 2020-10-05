<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'f_name' => 'Usama',
            'l_name' => 'Imdad',
            'email' => 'usamaimdadsian@gmail.com',
            'password' => bcrypt('Us@03246233967'),
            'type' => 'admin',
            'status' => 'active',
        ]);
    }
}
