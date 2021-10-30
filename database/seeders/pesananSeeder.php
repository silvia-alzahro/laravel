<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////membuat sampel data dari table posts
        $data= [
            ['nama_pelanggan' => 'Tasya',
            'nama_barang' => 'Gamis monalisa',
            'jumlah_barang' => 5,
            'tanggal_pesan' => '2021-09-15'],
            ['nama_pelanggan' => 'Rafi',
            'nama_barang' => 'Celana levis',
            'jumlah_barang' => 6,
            'tanggal_pesan' => '2021-09-25'],
            ['nama_pelanggan' => 'Syifa',
            'nama_barang' => 'Pashmina plisket',
            'jumlah_barang' => 8,
            'tanggal_pesan' => '2021-10-16'],
            ['nama_pelanggan' => 'Suci',
            'nama_barang' => 'Daster',
            'jumlah_barang' => 7,
            'tanggal_pesan' => '2021-10-25'],
            ['nama_pelanggan' => 'Denika',
            'nama_barang' => 'Sepatu converse',
            'jumlah_barang' => 10,
            'tanggal_pesan' => '2021-10-28']
        ];
        DB::table('pesanan')->insert($data);
    }
}
