<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonFilePath = file_get_contents(public_path(). '/countries/countries.json');
        $countries = json_decode($jsonFilePath, true);
        $country_count = array_column($countries, 'name');
        Country::factory(count($country_count))->create();
    }
}
