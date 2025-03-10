<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Country;
use App\Models\Guest;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountriesTableSeeder::class,
        ]);

        Guest::factory(100)->create();
        RoomType::factory(5)->create();
        Room::factory(15)->create();
    }
}
