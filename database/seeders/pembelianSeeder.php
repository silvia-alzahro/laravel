<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sampel data dari table posts
        $data= [
            ['nama_barang' => 'Gamis monalisa',
            'nama_supplier' => 'Yuniarti',
            'jumlah_barang' => 5,
            'tanggal' => '2021-09-15'],
            ['nama_barang' => 'Celana levis',
            'nama_supplier' => 'Haikal',
            'jumlah_barang' => 6,
            'tanggal' => '2021-09-25'],
            ['nama_barang' => 'Pashmina plisket',
            'nama_supplier' => 'Melani',
            'jumlah_barang' => 8,
            'tanggal' => '2021-10-16'],
            ['nama_barang' => 'Daster',
            'nama_supplier' => 'Silvia',
            'jumlah_barang' => 7,
            'tanggal' => '2021-10-25'],
            ['nama_barang' => 'Sepatu converse',
            'nama_supplier' => 'Afrijal',
            'jumlah_barang' => 10,
            'tanggal' => '2021-10-28']
        ];
        DB::table('pembelian')->insert($data);
    }
}
