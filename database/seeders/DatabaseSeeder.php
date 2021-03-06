<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(\Database\Seeders\CountriesTableSeeder::class);
        $this->call(\Database\Seeders\StatesTableSeeder::class);
        $this->call(\Database\Seeders\CitiesTableSeeder::class);
        $this->call(\Database\Seeders\RolesTableSeeder::class);
        $this->call(\Database\Seeders\UserSeeder::class);
        $this->call(\Database\Seeders\SpecialitySeeder::class);
        $this->call(\Database\Seeders\HospitalSeeder::class);
        $this->call(\Database\Seeders\DoctorSeeder::class);
    }
}
