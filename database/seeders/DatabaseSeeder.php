<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // pengiriman data ke dalam table di DB
        $this->call(PostsSeeder::class);
        //panggil seeder yang lain
        $this->call(barangSeeder::class);
        $this->call(pesananSeeder::class);
        $this->call(pembelianSeeder::class);
        $this->call(pembeliSeeder::class);
        $this->call(supplierSeeder::class);
        $this->call(heroSeeder::class);
        
    }
}
