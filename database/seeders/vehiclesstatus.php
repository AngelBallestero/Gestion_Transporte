<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VehicleStatus;

class vehiclesstatus extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VehicleStatus::create([
            'name'=>'Nuevo',
        ]);
        VehicleStatus::create([
            'name'=>'Aceptable',
        ]);
           
    }
}
