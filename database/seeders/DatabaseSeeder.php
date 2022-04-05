<?php

use Illuminate\Database\Seeder;
use database\Seeders\ProductsTableSeeder;
use database\Seeders\UsersTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        //$this->call(ProductSeeder::class);
    }
}