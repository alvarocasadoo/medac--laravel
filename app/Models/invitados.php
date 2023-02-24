<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invitados extends Model
{
    use HasFactory;

    protected $table='invitados';
    protected $primaryKey='id';
    protected $fillable=[
        'name',
        'apellidos',
        'email',
        'phone',
    
   

    ];

    public function invitadosReserva()
    {
        return $this->hasMany(Reserva::class, 'id_invitado');
    }
}
