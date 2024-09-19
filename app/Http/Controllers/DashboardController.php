<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('dashboard')],
            // Añadir más elementos si es necesario
        ];
    
        return view('dashboard.index', compact('breadcrumbs'));
    }
}
