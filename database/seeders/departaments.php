<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departament;

class departaments extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Departament::create([
    'name_departament' => 'Cesar',
    ]);
    }
}
