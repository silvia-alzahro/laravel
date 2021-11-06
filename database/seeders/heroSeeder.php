<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class heroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sampel data dari hero
        $data= [
            ['real_name' => 'Hayabusa', 'hero_name' => 'Haya', 'element' => 'bisa menghilang',
            'gender' => 'laki-laki', 'power' => 95],
            ['real_name' => 'Lancelot', 'hero_name' => 'Lance', 'element' => 'ahli dalam pedang', 
            'gender' => 'laki-laki', 'power' => 100],
            ['real_name' => 'Diana Prince', 'hero_name' => 'Wonder woman', 'element' => 'terkuat', 
            'gender' => 'perempuan', 'power' => 120],
            ['real_name' => 'Bhimasuta', 'hero_name' => 'Gatot kaca', 'element' => 'terbang', 
            'gender' => 'laki-laki', 'power' => 130],
            ['real_name' => 'Halle Berry', 'hero_name' => 'Catwoman', 'element' => 'jahat', 
            'gender' => 'perempuan', 'power' => 135]

        ];
        DB::table('hero')->insert($data);
    }
}
