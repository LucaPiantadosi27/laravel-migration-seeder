<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class TrainSeeder extends Seeder
{
    public function run(Faker $faker): void
    {


        
        // $newTrain->company ="Trenitalia";

        // $newTrain->departures_station = "Napoli";
       
        // $newTrain->arrival_station ="Firenze";
      
        // $newTrain->departure ="24-04-11 11:30:00";
        
        // $newTrain->arrival ="24-04-11 17:45:00";
        
        // $newTrain->code ="35a150";
        
        // $newTrain->carriages_number = 8;
        
        // $newTrain->is_on_time =true;
       
        // $newTrain->is_cancelled =false;


        for($i = 0; $i < 100; $i++) {
            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departures_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival = $faker->dateTimeBetween('+2 week', '+3 week');
            $newTrain->code = $faker->unique()->randomNumber(6, true);
            $newTrain->carriages_number = $faker->numberBetween(1, 10);
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->is_cancelled = $faker->boolean();

            $newTrain->save();
        }






    }
}
