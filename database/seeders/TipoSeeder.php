<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipo;

class TipoSeeder extends Seeder
{
    public function run(): void
    {
        Tipo::create([
            'nombre' => 'Analgésico',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Antiinflamatorio',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Antibiótico',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Antifúngico',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Antiviral',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Antihistamínico',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Antipirético',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Anticoagulante',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Antidiabético',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Antidepresivo',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Antipsicótico',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Antiepiléptico',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Diurético',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Laxante',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Expectorante',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Broncodilatador',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Hormonal',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Sedante',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Vacuna',
            'descripcion' => '',
        ]);

        Tipo::create([
            'nombre' => 'Suplemento',
            'descripcion' => '',
        ]);
    }
}
