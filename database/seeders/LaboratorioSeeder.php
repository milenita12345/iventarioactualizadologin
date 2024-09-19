<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laboratorio;

class LaboratorioSeeder extends Seeder
{
    public function run(): void
    {
        Laboratorio::create([
            'nombre' => 'Laboratorios INTI',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios Bagó',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios IFA',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios Vita',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios COFAR',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios Droguería INTI',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios AldeFarma',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios La Santé',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios Crespal',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios Andrómaco',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios Droguería Prosalud',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios Rowe Bolivia',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios Qualipharm',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios IMFA',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios Alcamesa',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios Farmavisión',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios LAFAR',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios Andrómaco Bolivia',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios Farmacias Chávez',
            'descripcion' => '',
        ]);

        Laboratorio::create([
            'nombre' => 'Laboratorios Sanofi Bolivia',
            'descripcion' => '',
        ]);
    }
}
