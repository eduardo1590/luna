<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\Dog;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dog::create([
            'name' => 'PRU', 
            'birthdate' => '3/22/2021',
            'gender' => 'F',
        ]);

        Dog::create([
            'name' => 'LUCKY', 
            'birthdate' => '3/22/2021',
            'gender' => 'F',
        ]);

        Dog::create([
            'name' => 'SPRIT', 
            'birthdate' => '3/22/2021',
            'gender' => 'M',
        ]);

        Dog::create([
            'name' => 'CHICA LINDA', 
            'birthdate' => '3/22/2021',
            'gender' => 'F',
        ]);

        Dog::create([
            'name' => 'ABIGAIL', 
            'birthdate' => '3/22/2021',
            'gender' => 'F',
        ]);

        Dog::create([
            'name' => 'MISTERIO', 
            'birthdate' => '3/22/2021',
            'gender' => 'F',
        ]);

        Dog::create([
            'name' => 'JUNIPERO', 
            'birthdate' => '3/22/2021',
            'gender' => 'M',
        ]);

        Dog::create([
            'name' => 'TUSO', 
            'birthdate' => '3/22/2021',
            'gender' => 'M',
        ]);
    }
}
