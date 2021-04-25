<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder,
	DB;


class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data ke table pegawai
    	DB::table('detail_profile')->insert([
    		'address' => 'Jember',
    		'nomor_tlp' => '08xxxxxxx',
    		'ttl' => '2002-03-17',
    		'foto' => 'picture.png'
    	]);
    }
}
