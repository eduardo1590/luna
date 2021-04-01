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
            'birthdate' => '22/03/2021',
            'gender' => 'F',
        ]);

        Dog::create([
            'name' => 'LUCKY', 
            'birthdate' => '22/03/2021',
            'gender' => 'F',
        ]);

        Dog::create([
            'name' => 'SPRIT', 
            'birthdate' => '22/03/2021',
            'gender' => 'M',
        ]);

        Dog::create([
            'name' => 'CHICA LINDA', 
            'birthdate' => '22/03/2021',
            'gender' => 'F',
        ]);

        Dog::create([
            'name' => 'ABIGAIL', 
            'birthdate' => '22/03/2021',
            'gender' => 'F',
        ]);

        Dog::create([
            'name' => 'MISTERIO', 
            'birthdate' => '22/03/2021',
            'gender' => 'F',
        ]);

        Dog::create([
            'name' => 'JUNIPERO', 
            'birthdate' => '22/03/2021',
            'gender' => 'M',
        ]);

        Dog::create([
            'name' => 'TUSO', 
            'birthdate' => '22/03/2021',
            'gender' => 'M',
        ]);
    }
}
