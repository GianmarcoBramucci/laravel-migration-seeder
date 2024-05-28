<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pathTrains= __DIR__ . "/trains.csv";
        $csvTrains= fopen($pathTrains,"r");
        if($csvTrains== false){
            exit("Cannot open $pathTrains");
        }
        $phpTrains=[];
        while($row = fgetcsv($csvTrains)){
            $phpTrains[]= $row; 
        }
        foreach($phpTrains as $index => $train){
            if($index !== 0){
                $newTrain= new Train();
                $newTrain->codice_treno=$train[0];
                $newTrain->azienda=$train[1];
                $newTrain->stazione_di_partenza=$train[2];
                $newTrain->stazione_di_arrivo=$train[3];
                $newTrain->orario_di_partenza=$train[4];
                $newTrain->orario_di_arrivo=$train[5];
                $newTrain->numero_carrozze=$train[6];
                $newTrain->in_orario=$train[7];
                $newTrain->cancellato=$train[8];
                $newTrain->save();
            }
        }
    }
}
