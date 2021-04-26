<?php

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('detail_profile')->insert([
            'address' => 'jember',
            'nomor_tlp' => '081xxxxx',
            'ttl' => '2002-03-17',
            'foto' => 'picture.png',
        ]);
    }
}
