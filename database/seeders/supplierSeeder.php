<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class supplierSeeder extends Seeder
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
            ['nama' => 'Tasya',
            'alamat' => 'Jalan.Sayuran Kp.Citamiang Kidul',
            'kode_pos' => 40239,
            'kota' => 'Bandung'],
            ['nama' => 'Rafi',
            'alamat' => 'Jalan.Cipagalo Girang No.9 Margasari',
            'kode_pos' => 40239,
            'kota' => 'Bandung'],
            ['nama' => 'Syifa',
            'alamat' => 'Jalan.Angklung Kecamatan Bojongherang',
            'kode_pos' => 43216,
            'kota' => 'Cianjur'],
            ['nama' => 'Suci',
            'alamat' => 'Jalan.Raya Sindang Barang Kecamatan Bogor',
            'kode_pos' => 16117,
            'kota' => 'Bogor'],
            ['nama' => 'Denika',
            'alamat' => 'Jalan.Bambang Suprapto Kom Kecamatan Purwokerto',
            'kode_pos' => 53114,
            'kota' => 'Purwokerto'],
        ];
        DB::table('supplier')->insert($data);
    }
}
