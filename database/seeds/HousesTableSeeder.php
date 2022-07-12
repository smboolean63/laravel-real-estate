<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\House;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types = ['appartamento', 'villa', 'casa'];
        $energy_rating = ['A', 'A+', 'A++', 'B', 'C', 'D'];

        for($i = 0; $i < 100; $i++) {
            $newHouse = new House();
            // tutte le colonne
            $newHouse->city = $faker->city();
            $newHouse->address = $faker->streetAddress();
            $newHouse->zip_code = $faker->randomNumber(5, true);
            $newHouse->type = $types[rand(0,count($types) - 1)];
            $newHouse->description = $faker->text();
            $newHouse->square_meters = rand(10, 300);
            $newHouse->rooms = rand(1, 10);
            $newHouse->bathrooms = rand(1, 5);
            $newHouse->floor = rand(1, 5);
            $newHouse->price = rand(20000, 3000000);
            $newHouse->energy_rating = $energy_rating[rand(0,count($energy_rating) - 1)];

            $newHouse->save();
        }
    }
}
