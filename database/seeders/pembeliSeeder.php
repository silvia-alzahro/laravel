<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pembeliSeeder extends Seeder
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
            'jk' => 'perempuan',
            'alamat' => 'Jalan.Sayuran Kp.Citamiang Kidul',
            'kode_pos' => 40239,
            'kota' => 'Bandung',
            'tanggal_lahir' => '2002-05-15'],
            ['nama' => 'Rafi',
            'jk' => 'laki-laki',
            'alamat' => 'Jalan.Cipagalo Girang No.9 Margasari',
            'kode_pos' => 40239,
            'kota' => 'Bandung',
            'tanggal_lahir' => '2001-06-27'],
            ['nama' => 'Syifa',
            'jk' => 'perempuan',
            'alamat' => 'Jalan.Angklung Kecamatan Bojongherang',
            'kode_pos' => 43216,
            'kota' => 'Cianjur',
            'tanggal_lahir' => '2000-01-16'],
            ['nama' => 'Suci',
            'jk' => 'perempuan',
            'alamat' => 'Jalan.Raya Sindang Barang Kecamatan Bogor',
            'kode_pos' => 16117,
            'kota' => 'Bogor',
            'tanggal_lahir' => '2002-04-13'],
            ['nama' => 'Denika',
            'jk' => 'laki-laki',
            'alamat' => 'Jalan.Bambang Suprapto Kom Kecamatan Purwokerto',
            'kode_pos' => 53114,
            'kota' => 'Purwokerto',
            'tanggal_lahir' => '2001-08-14'],
        ];
        DB::table('pembeli')->insert($data);
    }
}
