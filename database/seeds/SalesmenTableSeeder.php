<?php

use Illuminate\Database\Seeder;
use App\Salesman;
use Faker\Generator as Faker;

class SalesmenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /** 
         * Generate random salesman
        */
        $records = 10;

        for ($i = 0; $i < $records; $i++) {

            //random gender
            $gender = $faker->randomElement(['male', 'female']);
            $genderShort = ($gender == 'male') ? 'm' : 'f';

            $newSalesman = new Salesman();

            $newSalesman->name = $faker->name();
            $newSalesman->gender = $genderShort;
            $newSalesman->descrption = $faker->paragraph(3, true);
            $newSalesman->iban = $faker->bankAccountNumber;

            $newSalesman->save();


        }
    }
}
