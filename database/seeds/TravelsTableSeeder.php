<?php

use Faker\Generator as Faker;
use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i=0; $i<100; $i++){

            $new_travel = new Travel();
            
            $new_travel->package_name = $faker->word();
            $new_travel->destination = $faker->city();
            $new_travel->travel_type = $faker->word();
            $new_travel->stay_type = $faker->sentence($nbWords = 3, $variableNbWords = true);
            $new_travel->n_night = $faker->numberBetween($min = 3, $max = 31);
            $new_travel->price = $faker->numberBetween($min = 1000, $max = 9000);
            $new_travel->description = $faker->text($maxNbChars = 200);
            $new_travel->save();

        }

    }
}
