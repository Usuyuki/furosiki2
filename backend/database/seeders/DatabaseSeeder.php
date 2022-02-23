<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AppearanceTableSeeder::class);
        $this->call(Color_parrotTableSeeder::class);
        $this->call(FurosikiTableSeeder::class);
        $this->call(WakaTableSeeder::class);
    }
}