<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // \App\Models\Reservation::factory(10)->create();
        // \App\Models\Reservation::factory(10)->create();

        // \App\Models\Reservation::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Seed the application's reservations table with random data .
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('reservations')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'date' => $faker->date(),
                'time' => $faker->time(),
                'number_of_people' => $faker->numberBetween(1, 10),
                'message' => $faker->sentence(),
                'created_at' => now(),
                'updated_at' => now(),
            
            ]);
        }
    }
}
