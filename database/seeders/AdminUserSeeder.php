<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@example.com', // Cambia esto al correo que prefieras
            'password' => Hash::make('admin123'),// Cambia esto a la contraseña que prefieras
            'role' => 'administrador',
        ]);
    }
}
