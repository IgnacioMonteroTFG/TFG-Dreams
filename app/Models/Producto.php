<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $primaryKey = 'ID_Producto';

    protected $fillable = [
        'Nombre', 'Precio', 'Imagen', 'Descripcion', 'N_Marca', 'N_Categoria', 'Pagina'
    ];
}
