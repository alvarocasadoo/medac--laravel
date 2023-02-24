<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;
    protected $table='tarjetas';
    protected $primaryKey='id';
    protected $fillable=[
        'id_cliente',
        'mes_caducidad',
        'ano_caducidad',
        'cvv',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
