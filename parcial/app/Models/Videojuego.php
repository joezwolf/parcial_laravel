<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Videojuego extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'precio',
        'fecha_lanzamiento',
        'disponible',
        'rating',
        'genero',
        'plataformas'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
