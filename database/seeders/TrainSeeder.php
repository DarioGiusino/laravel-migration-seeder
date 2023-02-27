<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $new_train = new Train();

            $new_train->company = $faker->company();
            $new_train->departure_station = $faker->words(2, true);
            $new_train->arrival_station = $faker->words(2, true);
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->trian_code = $faker->randomNumber(5, false);
            $new_train->carriages_number = $faker->randomNumber(3, false);
            $new_train->in_time = $faker->boolean();
            $new_train->is_cancelled = $faker->boolean();

            $new_train->save();
        }
    }
}
