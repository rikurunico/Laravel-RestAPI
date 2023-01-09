<?php

namespace Database\Seeders;

use App\Models\quote;
use App\Models\User;
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
        quote::factory()->count(100)->create();
        User::factory()->count(100)->create();
    }
}
