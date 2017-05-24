<?php

namespace App\Http\Controllers;

use App\Reservations;
use App\RoomTypes;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\App;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation.index');
    }

    public function create()
    {
        return view('reservation.register');
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
        $reservation->ckechin           =   date('Y-m-d');
        $reservation->ckechout          =   date('Y-m-d');
        $reservation->type_reservation  =   $tipo;
        $reservation->total             =   0;
        $reservation->user_id           =   $request->id;
        $reservation->save();

        return redirect()->back();

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
        $data = DB::table('room_types')
            ->join('rooms', 'rooms.room_type_id', '=', 'room_types.id_room_type')
            ->where('rooms.availability', 'available')
            ->where('room_types.room_type','LIKE','%'.$term.'%')
            ->take(5)
            ->get();
        $result = array();
        foreach ($data as $key => $value)
        {
            $result[] = ['value' =>'Tipo: '.$value->room_type.' - '.$value->name.' | Precio: '.$value->price, 'id_room_type'=>$value->id_room_type, 'id_room'=>$value->id_room, 'precio'=>$value->price];
        }
        return response()->json($result);
    }

    public function autocompleteCliente(Request $request)
    {
        $term = $request->term;
        $data = DB::table('people')
        ->where('name','LIKE','%'.$term.'%')
        ->orWhere('last_name','LIKE','%'.$term.'%')
        ->orWhere('ndi','LIKE','%'.$term.'%')
        ->take(5)
        ->get();
        $result = array();
        foreach ($data as $key => $value)
        {
            $result[] = ['value' =>'Apellido: '.$value->last_name.' | Nombre: '.$value->name.' | NITCI: '.$value->ndi, 'id'=>$value->id_person];
        }
        return response()->json($result);
    }
    /*
     * esta funcion ayuda a agregar el tipo de habitacion y almacenarla en la base de datos
     */
    public function addReservation(Request $request)
    {

        $room_type_id = $request->input('room_type_id');
        /*$sub_total = $request->input('precio');
        $cantidad = 1;
        $room_id = $request->input('room_id');*/
/*
        $detail_room = array(
          'sub_total'   => $sub_total,
          'cantidad'    => $cantidad,
          'room_id'     => $room_id,
        );*/
        $roomType = RoomTypes::where('id_room_type',$room_type_id)
        ->get();
        foreach($roomType as $key)
        {
            echo json_encode(array('result' => true, 'roomType' => $key->room_type, 'price' => $key->price, 'cantidad' => $key->cantidad));
        }
    }

    public function searchRooms(Request $request)
    {
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');
        $id_room_type = $request->input('id_room_type');
        $data = DB::table('room_types')
            ->join('rooms', 'rooms.room_type_id', '=', 'room_types.id_room_type')
            ->where('rooms.availability', 'available')
            ->get();
        return response()->json($data);
    }

    public function reservationRegister(Request $request)
    {
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');
        $id_person = $request->input('id_person');
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
        $reservation->ckechin           =   $checkin;
        $reservation->ckechout          =   $checkout;
        $reservation->type_reservation  =   $tipo;
        $reservation->total             =   0;
        $reservation->user_id           =   2;
        $reservation->save();

        return view('reservation.register');

    }
}
