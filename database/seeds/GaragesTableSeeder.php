<?php

use Illuminate\Database\Seeder;
use App\Garage;
use Faker\Generator as Faker;

class GaragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
            /** 
         * Generate random worker
        */
        $records = 20;

        for ($i = 0; $i < $records; $i++) {

            //random gender
            $gender = $faker->randomElement(['male', 'female']);
            $genderShort = ($gender == 'male') ? 'm' : 'f';

            $newGarage = new Garage();

            $newGarage->name = $faker->name();
            $newGarage->gender = $genderShort;
            $newGarage->descrption = $faker->paragraph(3, true);
            $newGarage->iban = $faker->bankAccountNumber;

            $newGarage->save();

        }
    }
}
