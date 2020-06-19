<?php

use Illuminate\Database\Seeder;
use App\Salesman;
use App\Garage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SalesmenTableSeeder::class,
            GaragesTableSeeder::class
        ]);
    }
}
