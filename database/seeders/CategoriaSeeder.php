<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        Categoria::create([
            'nombre' => 'Analgésicos y Antipiréticos',
            'descripcion' => 'Medicamentos que alivian el dolor y reducen la fiebre.',
        ]);

        Categoria::create([
            'nombre' => 'Antiinflamatorios',
            'descripcion' => 'Medicamentos que reducen la inflamación.',
        ]);

        Categoria::create([
            'nombre' => 'Antibióticos',
            'descripcion' => 'Medicamentos que combaten infecciones bacterianas.',
        ]);

        Categoria::create([
            'nombre' => 'Antifúngicos',
            'descripcion' => 'Medicamentos que tratan infecciones por hongos.',
        ]);

        Categoria::create([
            'nombre' => 'Antivirales',
            'descripcion' => 'Medicamentos que tratan infecciones virales.',
        ]);

        Categoria::create([
            'nombre' => 'Antihistamínicos',
            'descripcion' => 'Medicamentos para aliviar síntomas de alergias.',
        ]);

        Categoria::create([
            'nombre' => 'Anticoagulantes',
            'descripcion' => 'Medicamentos que previenen la formación de coágulos.',
        ]);

        Categoria::create([
            'nombre' => 'Antidiabéticos',
            'descripcion' => 'Medicamentos para controlar la diabetes.',
        ]);

        Categoria::create([
            'nombre' => 'Antidepresivos',
            'descripcion' => 'Medicamentos para tratar la depresión.',
        ]);

        Categoria::create([
            'nombre' => 'Antipsicóticos',
            'descripcion' => 'Medicamentos para tratar trastornos psicóticos.',
        ]);

        Categoria::create([
            'nombre' => 'Antiepilépticos',
            'descripcion' => 'Medicamentos para prevenir convulsiones.',
        ]);

        Categoria::create([
            'nombre' => 'Diuréticos',
            'descripcion' => 'Medicamentos que aumentan la producción de orina.',
        ]);

        Categoria::create([
            'nombre' => 'Laxantes',
            'descripcion' => 'Medicamentos que facilitan el tránsito intestinal.',
        ]);

        Categoria::create([
            'nombre' => 'Expectorantes',
            'descripcion' => 'Medicamentos que ayudan a expulsar mucosidad.',
        ]);

        Categoria::create([
            'nombre' => 'Broncodilatadores',
            'descripcion' => 'Medicamentos que relajan las vías respiratorias.',
        ]);

        Categoria::create([
            'nombre' => 'Hormonas y Suplementos',
            'descripcion' => 'Medicamentos hormonales y suplementos dietéticos.',
        ]);

        Categoria::create([
            'nombre' => 'Sedantes y Tranquilizantes',
            'descripcion' => 'Medicamentos que inducen calma o sueño.',
        ]);

        Categoria::create([
            'nombre' => 'Vacunas',
            'descripcion' => 'Medicamentos que previenen enfermedades infecciosas.',
        ]);

        Categoria::create([
            'nombre' => 'Suplementos',
            'descripcion' => 'Productos que aportan nutrientes adicionales.',
        ]);
    }
}
