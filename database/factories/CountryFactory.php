<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $countries = ['Bangladesh', 'India', 'Pakistan', 'Saudi Arabia', 'Uganda'];
        $jsonFilePath = file_get_contents(public_path() . '/countries/countries.json');
        $countries = json_decode($jsonFilePath, true);
        $country = fake()->unique()->randomElement($countries);
        return [
            'country_name' => $country['name'],
            'flag_image' => Str::lower($country['code']) .'.png',
        ];
    }
}
