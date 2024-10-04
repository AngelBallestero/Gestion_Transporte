<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VehicleType;

class vehicletypes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VehicleType::create([
         'name'=>'honda',
        ]);
        VehicleType::create([
            'name'=>'suzuki',
        ]);
        
    }
}
