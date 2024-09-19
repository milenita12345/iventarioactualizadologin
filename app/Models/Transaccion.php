<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;

    protected $table = 'transacciones';

    protected $fillable = [
        'producto_id', 
        'fecha', 
        'tipo', 
        'precio', 
        'cantidad'
    ];

    //RELACIONS DE MODELO
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
