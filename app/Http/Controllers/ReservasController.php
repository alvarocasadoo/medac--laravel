<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Reserva;
use App\Models\Horarios;
use App\Models\invitados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservasController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){ 
         
           
            $Reserva = new Reserva();
            $Reserva  ->   id_cliente = Auth::user()->id;
            $Reserva ->    id_menu = $request->post('menu');
            $Reserva  ->   fecha_reserva =  $request->post('horario');
            $Reserva  ->   num_tarjeta = $request->post('tarjeta');
            $Reserva  ->   num_personas = $request->post('comensales');
            $Reserva  ->   id_mesa = 1;
            $Reserva->save();
            $reservado=Horarios::where('id', $request->post('horario'));
            $reservado->update(['estado' => 'Reservado']);

            return redirect('/misReservas')->with('success', 'Reserva realizada correctamente');
    }

    public function storeinvitado(Request $request)
    {
        invitados::create([
            'email' => $request->post('email'),
            'name' => $request->post('name'),
            'apellidos' => $request->post('apellidos'),
            'phone' => $request->post('phone')
        ]);

        // $datoInvitado=Invitados::select('id')
        // ->where('email', $request->input('email'))
        // ->get();
        $datoInvitado=Invitados:: orderBy('id', 'desc')->get();
        $inviId=$datoInvitado->first();

        Reserva::create([
            'id_invitado' => $inviId->id,
            'id_mesa' => 1,
            'id_menu' => $request->post('menu'),
            'fecha_reserva' => $request->post('horario'),
            'num_tarjeta' => $request->post('tarjeta'),
            'num_personas' => $request->post('comensales')
            
        ]);
        return redirect("/")->with('success', 'Reserva realizada correctamente');


    }

    public function recogerTodo(Request $request)
    {
        $menus = Menu::recogerMenus();
        $fechas = $request->post('fecha');
        $horas = $request->post('hora');
        $id = $request->post('horario');
        return view("reserva", ['id' => $id, 'fecha' => $fechas, 'hora' => $horas, 'menus' => $menus]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function showall()
    {

        $Lista_reservar = Reserva::where('id_cliente', Auth::user()->id)->get();
        
        return view("misReservas", ['Lista_sacada' => $Lista_reservar]);
    }

    public function eliminarReservas($id)
    {
  

        $horario=Reserva::select('fecha_reserva')->where('id', $id)
        ->get();
        Reserva::find($id)->delete();
        $borrado=Horarios::where('id',$horario->value('fecha_reserva'));
        $borrado->update(['estado' => 'Disponible']);
//        return redirect("/misReservas");
        //Reservas::eliminarReservas($id);

        // $reservado=Horarios::where('id', $horario->fecha_reserva);
        // $reservado->estado = 'Disponible';
        // $reservado->save();
        return redirect("/misReservas");

    }
    public function Evento()
    {
        $horario = Horarios::select('fecha')
            ->where('estado', 'Disponible')
            ->groupBy('fecha')
            ->get();


        $datos = array();

        // public function horas (Request $request){
        //     $horario = Horarios::where('fecha', $request->fecha)->where('estado', 'Disponible')->get();
        // return horario;
        // }


        foreach ($horario as $row) {
            $datos[] = array(
                'id' => $row["id"],
                'title' => "",
                'start' => $row["fecha"],
                'end' => $row["fecha"],
            );
        }
        return response()->json($datos);
    }

    public function Eventoajax(Request $request)
    {
        $horario = Horarios::where([
            ['fecha', $request->get("fecha")],
            ['estado', 'Disponible']
        ])->get();
        $hora = array();

        foreach ($horario as $row) {
            $hora[] = array(
                'id' => $row["id"],
                "hora" => date('H:i', strtotime($row["hora"])),
            );
        }            return response()->json($hora);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

