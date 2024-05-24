<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $primaryKey = 'ID_Pedidos';

    protected $fillable = [
        'Pago', 'Fecha', 'DNI_Persona', 'ID_Proveedores', 'ID_Direccion'
    ];
}