<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class home extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table home
        DB::table('homes')->insert([
            'foto' => 'temuser/img/about-1.jpg',
            'foto2' => 'temuser/img/about-2.jpg',
            'fotoheader' => 'temuser/img/carousel-1.jpg',
            'kegiatan' => 'Berbasis Industri',
            'pengajar' => '23',
            'siswa' => '280',
            'clients' => '56',
            'project' => '450',
        ]);

    }
}
