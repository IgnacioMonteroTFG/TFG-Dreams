<?php

// app/Models/Persona.php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Persona extends Authenticatable
{
    protected $table = 'Personas';
    protected $primaryKey = 'DNI_Persona';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'DNI_Persona', 'Apellido1', 'Apellido2', 'Nombre', 'imagen','Telefono', 'Email', 'Rol', 'User', 'Password', 'Pagina'
    ];
}
