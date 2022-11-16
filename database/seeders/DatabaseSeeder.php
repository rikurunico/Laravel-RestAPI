<?php

namespace Database\Seeders;

use App\Models\quote;
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
    }
}
