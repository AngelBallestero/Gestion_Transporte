<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(Document_Types::class);
        $this->call(vehicletypes::class);
        $this->call(vehiclesstatus::class);
        $this->call(departaments::class);
    }
}
