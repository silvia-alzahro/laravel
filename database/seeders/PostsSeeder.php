<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PostsSeeder extends Seeder
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
            ['title' => 'Karina Over Power',
            'content' => 'lorem ipsum'],
            ['title' => 'Seminggu belajar laravel',
            'content' => 'lorem ipsum'],
            ['title' => '5 langkah tidak menjadi beban keluarga',
            'content' => 'lorem ipsum']
        ];
        DB::table('posts')->insert($data);
    }
}
