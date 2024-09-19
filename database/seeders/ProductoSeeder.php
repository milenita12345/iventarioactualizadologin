<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Paracetamol 500mg',
            'alias' => 'Paracetamol',
            'descripcion' => '',
            'codigo' => 'PROD_001',
            'categoria_id' => 1,
            'tipo_id' => 1,
            'laboratorio_id' => 1,
            'cantidad_minima' => 20,
        ]);

        Producto::create([
            'nombre' => 'Ibuprofeno 400mg',
            'alias' => 'Ibuprofeno',
            'descripcion' => '',
            'codigo' => 'PROD_002',
            'categoria_id' => 2,
            'tipo_id' => 2,
            'laboratorio_id' => 2,
            'cantidad_minima' => 15,
        ]);

        Producto::create([
            'nombre' => 'Amoxicilina 500mg',
            'alias' => 'Amoxicilina',
            'descripcion' => '',
            'codigo' => 'PROD_003',
            'categoria_id' => 3,
            'tipo_id' => 3,
            'laboratorio_id' => 3,
            'cantidad_minima' => 25,
        ]);

        Producto::create([
            'nombre' => 'Clotrimazol Crema',
            'alias' => 'Clotrimazol',
            'descripcion' => '',
            'codigo' => 'PROD_004',
            'categoria_id' => 4,
            'tipo_id' => 4,
            'laboratorio_id' => 4,
            'cantidad_minima' => 10,
        ]);

        Producto::create([
            'nombre' => 'Aciclovir 200mg',
            'alias' => 'Aciclovir',
            'descripcion' => '',
            'codigo' => 'PROD_005',
            'categoria_id' => 5,
            'tipo_id' => 5,
            'laboratorio_id' => 5,
            'cantidad_minima' => 12,
        ]);

        Producto::create([
            'nombre' => 'Loratadina 10mg',
            'alias' => 'Loratadina',
            'descripcion' => '',
            'codigo' => 'PROD_006',
            'categoria_id' => 6,
            'tipo_id' => 6,
            'laboratorio_id' => 6,
            'cantidad_minima' => 30,
        ]);

        Producto::create([
            'nombre' => 'Losartán 50mg',
            'alias' => 'Losartán',
            'descripcion' => '',
            'codigo' => 'PROD_007',
            'categoria_id' => 7,
            'tipo_id' => 7,
            'laboratorio_id' => 7,
            'cantidad_minima' => 10,
        ]);

        Producto::create([
            'nombre' => 'Sertralina 50mg',
            'alias' => 'Sertralina',
            'descripcion' => '',
            'codigo' => 'PROD_008',
            'categoria_id' => 8,
            'tipo_id' => 8,
            'laboratorio_id' => 8,
            'cantidad_minima' => 20,
        ]);

        Producto::create([
            'nombre' => 'Warfarina 5mg',
            'alias' => 'Warfarina',
            'descripcion' => '',
            'codigo' => 'PROD_009',
            'categoria_id' => 9,
            'tipo_id' => 9,
            'laboratorio_id' => 9,
            'cantidad_minima' => 10,
        ]);

        Producto::create([
            'nombre' => 'Metformina 850mg',
            'alias' => 'Metformina',
            'descripcion' => '',
            'codigo' => 'PROD_010',
            'categoria_id' => 10,
            'tipo_id' => 10,
            'laboratorio_id' => 10,
            'cantidad_minima' => 35,
        ]);

        Producto::create([
            'nombre' => 'Carbamazepina 200mg',
            'alias' => 'Carbamazepina',
            'descripcion' => '',
            'codigo' => 'PROD_011',
            'categoria_id' => 11,
            'tipo_id' => 11,
            'laboratorio_id' => 11,
            'cantidad_minima' => 18,
        ]);

        Producto::create([
            'nombre' => 'Salbutamol Inhalador',
            'alias' => 'Salbutamol',
            'descripcion' => '',
            'codigo' => 'PROD_012',
            'categoria_id' => 12,
            'tipo_id' => 12,
            'laboratorio_id' => 12,
            'cantidad_minima' => 20,
        ]);

        Producto::create([
            'nombre' => 'Prednisona 50mg',
            'alias' => 'Prednisona',
            'descripcion' => '',
            'codigo' => 'PROD_013',
            'categoria_id' => 13,
            'tipo_id' => 13,
            'laboratorio_id' => 13,
            'cantidad_minima' => 15,
        ]);

        Producto::create([
            'nombre' => 'Furosemida 40mg',
            'alias' => 'Furosemida',
            'descripcion' => '',
            'codigo' => 'PROD_014',
            'categoria_id' => 14,
            'tipo_id' => 14,
            'laboratorio_id' => 14,
            'cantidad_minima' => 25,
        ]);

        Producto::create([
            'nombre' => 'Azatioprina 50mg',
            'alias' => 'Azatioprina',
            'descripcion' => '',
            'codigo' => 'PROD_015',
            'categoria_id' => 15,
            'tipo_id' => 15,
            'laboratorio_id' => 15,
            'cantidad_minima' => 10,
        ]);

        Producto::create([
            'nombre' => 'Bisacodilo 5mg',
            'alias' => 'Bisacodilo',
            'descripcion' => '',
            'codigo' => 'PROD_016',
            'categoria_id' => 16,
            'tipo_id' => 16,
            'laboratorio_id' => 16,
            'cantidad_minima' => 20,
        ]);

        Producto::create([
            'nombre' => 'Haloperidol 5mg',
            'alias' => 'Haloperidol',
            'descripcion' => '',
            'codigo' => 'PROD_017',
            'categoria_id' => 17,
            'tipo_id' => 17,
            'laboratorio_id' => 17,
            'cantidad_minima' => 12,
        ]);

        Producto::create([
            'nombre' => 'Dipirona 500mg',
            'alias' => 'Dipirona',
            'descripcion' => '',
            'codigo' => 'PROD_018',
            'categoria_id' => 18,
            'tipo_id' => 18,
            'laboratorio_id' => 18,
            'cantidad_minima' => 25,
        ]);

        Producto::create([
            'nombre' => 'Diazepam 10mg',
            'alias' => 'Diazepam',
            'descripcion' => '',
            'codigo' => 'PROD_019',
            'categoria_id' => 19,
            'tipo_id' => 19,
            'laboratorio_id' => 19,
            'cantidad_minima' => 10,
        ]);

        Producto::create([
            'nombre' => 'Complejo B Inyectable',
            'alias' => 'Complejo B',
            'descripcion' => '',
            'codigo' => 'PROD_020',
            'categoria_id' => 20,
            'tipo_id' => 20,
            'laboratorio_id' => 20,
            'cantidad_minima' => 30,
        ]);
    }
}
