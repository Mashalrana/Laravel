<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Call the seeders here
        $this->call([
            ArticlesTableSeeder::class,
            UsersTableSeeder::class, // Voeg UsersTableSeeder toe
            // And other seeders if you have
        ]);
    }
}
