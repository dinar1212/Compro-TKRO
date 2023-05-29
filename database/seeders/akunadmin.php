<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class akunadmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Dinar',
            'email' => 'admin@gmail.com',
            'password' => bcrypt("12345678"),
        ]);
    }
}
