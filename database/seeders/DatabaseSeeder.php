<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Apartment;
use App\Models\House;
use App\Models\Phone;
use http\Client\Curl\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'id'=>1,
             'name' => 'Mikhail',
             'email' => 'test@gmail.com',
             'password'=>Hash::make('test')
         ]);

        \App\Models\User::factory()->create([
            'id'=>2,
            'name' => 'Alex',
            'email' => 'alex@gmail.com',
            'password'=>Hash::make('test')
        ]);

        Phone::query()->create([
            'number'=>fake()->phoneNumber(),
            'user_id'=>1
        ]);
        Phone::query()->create([
            'number'=>fake()->phoneNumber(),
            'user_id'=>1
        ]);

        Phone::query()->create([
            'number'=>fake()->phoneNumber(),
            'user_id'=>2
        ]);


        House::query()->create([
            'id'=>1,
            'address'=>fake()->address(),
        ]);

        Apartment::query()->create([
            'owner_id'=>1,
            'house_id'=>1,
            'number'=>50
        ]);
        Apartment::query()->create([
            'owner_id'=>2,
            'house_id'=>1,
            'number'=>99
        ]);
        Apartment::query()->create([
            'owner_id'=>1,
            'house_id'=>1,
            'number'=>88
        ]);










    }
}
