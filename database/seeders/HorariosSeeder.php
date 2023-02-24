<?php

namespace Database\Seeders;

use App\Models\Horarios;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HorariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new Horarios();
        $user->fecha='2023-02-25';
        $user->hora='08:00';
        $user->estado='Disponible';
        $user->save();

        $user=new Horarios();
        $user->fecha='2023-02-23';
        $user->hora='08:00';
        $user->estado='Disponible';
        $user->save();

        $user=new Horarios();
        $user->fecha='2023-02-22';
        $user->hora='09:00';
        $user->estado='Disponible';
        $user->save();

        $user=new Horarios();
        $user->fecha='2023-02-21';
        $user->hora='09:00';
        $user->estado='Disponible';
        $user->save();
        
    }
}
