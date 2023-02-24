<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table='reservas';
    protected $primaryKey='id';
    protected $fillable=[
        'id_cliente',
        'id_mesa',
        'num_tarjeta',
        'num_personas',
        'fecha_reserva',
        'id_menu',
        'id_invitado',
    ];

    public function cliente(){
        return $this->belongsTo(User::class, 'id_cliente');
    }

    public function menus(){
        return $this->belongsTo(Menu::class, 'id_menu');
    }

    public function Mesa(){
        return $this->belongsTo(Mesa::class, 'id_mesa');
    }

    public function horarios(){
        return $this->belongsTo(Horarios::class, 'fecha_reserva');
    }

    public function menu(){
        return $this->belongsTo(Menu::class, 'nombre');
    }

    public function invitados(){
        return $this->belongsTo(invitados::class, 'id_invitado');
    }

 
}
