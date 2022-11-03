<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use APP\_train;

class _trains extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker  $Faker)
    {
        for($i=0; $i>100; $i++){

            $newtrain = new _train();


        }
    }
}
