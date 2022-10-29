<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;


    public function prestador(){
        return $this->hasOne(User::class, 'id', 'prestador');
    }

    public function tienda(){
        return $this->belongsTo(Tienda::class, 'id', 'tienda');
    }

    public function turnos(){
        return $this->hasMany(Turno::class, 'servicio');
    }
}
