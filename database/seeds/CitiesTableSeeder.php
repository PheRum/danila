<?php

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run(): void
    {
        $cities = (new City)->getCities();

        foreach ($cities as $cityId => $city) {
            factory(City::class)->create([
                'iso_3166_3' => $city['iso_3166_3'],
                'country_code' => $city['country_code'],
                'name' => $city['name'],
            ]);
        }
    }
}
