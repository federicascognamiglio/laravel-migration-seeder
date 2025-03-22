<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Importo Faker
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        // Creo 10 treni
        for($i = 0; $i < 10; $i++) {

            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrival_time = $faker->dateTime();
            $newTrain->code = $faker->unique()->bothify('??#####');
            $newTrain->carriage_total = $faker->numberBetween(1, 10);
            $newTrain->is_delayed = $faker->boolean();
            $newTrain->is_canceled = $faker->boolean();

            $newTrain->save();
        }
        
    }
}
