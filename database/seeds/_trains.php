<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\_train;

class _trains extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker  $faker)
    {
        for($i=0; $i < 15; $i++){

            $newtrain = new _train() ;
            $newtrain->Azienda = $faker->text();
            $newtrain->Stazione_di_partenza = $faker->country();
            $newtrain->Stazione_di_arrivo = $faker->country();
            $newtrain->Orario_di_partenza = $faker->time('H:i:s');
            $newtrain->Orario_di_arrivo = $faker->time('H:i:s');
            $newtrain->codice_treno = $faker->randomNumber(1,false);
            $newtrain->numero_carrozze = $faker->randomNumber(1, false);
            $newtrain->Data_partenza = $faker->date('Y_m_d');
            $newtrain->In_orario = $faker->boolean();
            $newtrain->Cancellato = $faker->boolean();
            $newtrain->save();


        }

    }
}
