<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->Orario_partenza = $faker->time();
            $newTrain->Orario_arrivo = $faker->time();
            $newTrain->Codice_treno = $faker->numberBetween(0, 100);
            $newTrain->Numero_carrozze = $faker->randomDigit();
            $newTrain->save();
        }
    }
}