<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    public function servicio(){
        return $this->belongsTo(Servicio::class,'id', 'servicio_id');
    }

    public function cliente(){
        return $this->hasOne(User::class, );
    }

}
