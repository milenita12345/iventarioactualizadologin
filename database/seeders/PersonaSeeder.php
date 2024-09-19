<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonaSeeder extends Seeder
{
    public function run(): void
    {
        Persona::create([
            'nombre' => 'Cliente General',
            'direccion' => '',
            'telefono' => '',
            'email' => '',
            'tipo' => 'Cliente',
        ]);

        Persona::create([
            'nombre' => 'Proveedor General',
            'direccion' => '',
            'telefono' => '',
            'email' => '',
            'tipo' => 'Proveedor',
        ]);
    }
}
