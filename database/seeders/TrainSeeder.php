<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();


        
        $newTrain->company ="Trenitalia";

        $newTrain->departures_station = "Napoli";
       
        $newTrain->arrival_station ="Firenze";
      
        $newTrain->departure ="24-04-11 11:30:00";
        
        $newTrain->arrival ="24-04-11 17:45:00";
        
        $newTrain->code ="35a150";
        
        $newTrain->carriages_number = 8;
        
        $newTrain->is_on_time =true;
       
        $newTrain->is_cancelled =false;


        $newTrain->save();  

    }
}
