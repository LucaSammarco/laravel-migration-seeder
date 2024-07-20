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
        //

        for ($i = 0; $i < 250; $i++) {

            $trains = new Train();
            $trains->azienda = $faker->company;
            $trains->stazione_partenza = $faker->city;
            $trains->stazione_arrivo = $faker->city;
            $trains->orario_partenza = $faker->time();
            $trains->orario_arrivo = $faker->time();
            $trains->codice_treno = $faker->unique()->randomNumber(5);
            $trains->numero_carrozze = $faker->numberBetween(1, 12);
            $trains->in_orario = $faker->boolean();
            $trains->cancellato = $faker->boolean();
            $trains->data_partenza = $faker->date();
            $trains->data_arrivo = $faker->date();
            $trains->save();
        }


    }
}