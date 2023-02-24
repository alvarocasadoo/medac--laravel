<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table='menus';
    protected $primaryKey='id';
    protected $fillable=[
        'nombre',
        'precio',
    ];

    public function reserva(){
        return $this->belongsTo(Reserva::class, 'id');
    }

    public static function recogerMenus(){
        $menus = Menu::all();
        return $menus;
    }

    public function menuReserva()
    {
        return $this->hasMany(Reserva::class, 'id_menu');
    }

    
}
