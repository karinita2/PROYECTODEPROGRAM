<?php

namespace App\Http\Controllers;

use App\Reservations;
use App\RoomTypes;
use Illuminate\Http\Request;
use DB;
class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation.register');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        if($request->input('role_id') != 1)
        {
            $tipo = 'interno';
        }
        else
        {
            $tipo = 'externo';
        }
        $reservation = new Reservations();
        $reservation->date              =   date('Y-m-d');
        $reservation->ckechin           =   $request->checkin;
        $reservation->ckechout          =   $request->checkout;
        $reservation->type_reservation  =   $tipo;
        $reservation->total             =   0;
        $reservation->user_id           =   $request->id;
        $reservation->save();

        dd('reserva creada');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
    /*
     * esta funcion nos ayuda a buscar el tipo de habitacion que existe disponible
     */
    public function autocomplete(Request $request)
    {
        $term = $request->term;
        $data = RoomTypes::where('room_type','LIKE','%'.$term.'%')
        ->take(5)
        ->get();
        $result = array();
        foreach ($data as $key => $value)
        {
            $result[] = ['value' => $value->room_type.' precio: '.$value->price, 'id'=>$value->id_room_type];
        }
        return response()->json($result);
    }
    /*
     * esta funcion ayuda a agregar el tipo de habitacion y almacenarla en la base de datos
     */
    public function addReservation(Request $request)
    {
        # dd($request->tipo_habitacionId);
        $type = $request->input('tipo_habitacionId');
        $roomType = RoomTypes::where('id_room_type',$type)
        ->get();
        foreach($roomType as $key)
        {
            echo json_encode(array('result' => true, 'roomType' => $key->room_type, 'price' => $key->price, 'cantidad' => $key->cantidad));
        }

    }
}
