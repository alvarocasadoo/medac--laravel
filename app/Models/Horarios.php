<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    use HasFactory;

    protected $table='horarios';
    protected $primaryKey='id';
    protected $fillable=[
        'fecha',
        'hora',
        'estado',
    ];

    public function horarioReserva()
    {
        return $this->hasMany(Reserva::class, 'fecha_reserva');
    }

    public function horaReserva(){
        return $this->hasOne(Reserva::class, 'hora');
    }


}


