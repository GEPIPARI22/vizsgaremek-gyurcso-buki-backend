<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Iskola>
 */
class IskolaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'nev'=> $this->faker->unique()->sentence().' Iskola',
            'om_azonosito'=> $this->faker->unique()->sentence(),
            'iranyitoszam'=> '9700',
            'varos'=> 'Szombathely',
            'utca'=> $this->faker->unique()->sentence(),
            'telefon'=> 'telefonszám',
            'email'=> 'email@email.hu',
            'logo'=> 'logo',
            'fenykep'=> 'fenykep',
        ];
    }
}
