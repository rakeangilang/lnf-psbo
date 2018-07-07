<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('barangs')->insert([
            'nama_barang' => str_random(10),
            'deskripsi' => str_random(10),
            'tempat' => str_random(10),
            'waktu' => '2014-03-14',
            'foto_barang' => str_random(10),
            'jenis' => 'kehilangan',
            'status' => '1',
            'kategori' => 'selesai'
        ]);
    }
}
