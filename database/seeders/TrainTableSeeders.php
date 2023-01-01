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
            $newTrain->azienda = $faker->word();
            $newTrain->stazionedipartenza = $faker->city();
            $newTrain->stazionediarrivo = $faker->city();
            $newTrain->Orariodipartenza = $faker->time();
            $newTrain->Orariodiarrivo = $faker->time();
            $newTrain->Codicetreno = $faker->numberBetween(0, 100);
            $newTrain->Numerocarrozze = $faker->randomDigit();
            $newTrain->save();
        }
    }
}