<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
  use HasFactory;
  protected $fillable = [
    'ci',
    'extension',
    'nombres',
    'apellidos',
    'genero',
    'direccion',
    'telefono',
    'celular',
    'fecha_nacimiento',
    'estado_civil',
    'foto',
  ];
}
