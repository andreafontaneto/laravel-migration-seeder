<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_travel = new Travel();
        
        $new_travel->package_name = "Goditi la vita";
        $new_travel->destination = "Maldive";
        $new_travel->travel_type = "Relax";
        $new_travel->stay_type = "camera doppia";
        $new_travel->n_night = 7;
        $new_travel->price = 4500;
        $new_travel->description = "Una vacanza da sogni in un isola da sogno";
        $new_travel->save();
    }
}
