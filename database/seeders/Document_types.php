<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Document_type;

class Document_types extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Document_type::create([
            'name' => 'Pasaporte',
        ]);

        Document_type::create([
            'name' => 'DNI',
        ]);

    }
}
