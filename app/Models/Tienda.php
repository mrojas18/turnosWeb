<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    public function propietario(){
        return $this->hasOne(User::class, 'id', 'propietario');
    }

    public function servicios(){
        return $this->hasMany(Servicio::class, 'tienda');
    }
}


