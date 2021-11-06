<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class barangSeeder extends Seeder
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
            'varian' => 'Ungu',
            'harga_beli' => 85000,
            'harga_jual' => 95000],
            ['nama_barang' => 'Celana levis',
            'varian' => 'Hitam',
            'harga_beli' => 70000,
            'harga_jual' => 85000],
            ['nama_barang' => 'Pashmina plisket',
            'varian' => 'Coklat',
            'harga_beli' => 20000,
            'harga_jual' => 30000],
            ['nama_barang' => 'Daster',
            'varian' => 'Merah',
            'harga_beli' => 25000,
            'harga_jual' => 35000],
            ['nama_barang' => 'Sepatu converse',
            'varian' => 'Hitam',
            'harga_beli' => 80000,
            'harga_jual' => 90000]
        ];
        DB::table('barang')->insert($data);
    }
}
