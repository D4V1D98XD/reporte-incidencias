<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','nombre', 'descripcion', 'area', 'fecha', 'foto', 'estado'];
}
