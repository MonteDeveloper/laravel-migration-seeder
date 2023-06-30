<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 25; $i++){
            $train = new Train();
            $train->company =$faker->company();
            $train->departure_station =$faker->city();
            $train->arrival_station =$faker->city();
            $train->departure_time =$faker->time();
            $train->arrival_time =$faker->time();
            $train->train_code = 'T'.$faker->ean8();
            $train->number_of_carriages =$faker->numberBetween(4, 12);
            $train->on_time = $faker->numberBetween(0, 1);
            $train->cancelled = $faker->numberBetween(0, 1);
            $train->save();
        }
    }
}
