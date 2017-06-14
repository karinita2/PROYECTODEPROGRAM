<?php

namespace App\Http\Controllers;

use App\Details;
use App\Reservations;
use App\Rooms;
use App\RoomTypes;
use App\Services;
use App\ServicesDetails;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\App;

class ReservationController extends Controller
{
    public function index()
    {
        $roomTypes = DB::table('room_types')
            ->get();
        return view('reservation.index', compact('roomTypes'));
    }

    /**
     *
     */
    public function lista(){

        $search = \Request::get('search');
        $details = DB::table('details')
            ->join('reservations','reservations.id_reservation','=','details.reservation_id')
            ->join('rooms','rooms.id_room','=','details.room_id')
            ->where('rooms.name','like','%'.$search.'%')
            ->orWhere('details.id_detail','like','%'.$search.'%')
            ->join('room_types','room_types.id_room_type','=','rooms.room_type_id')
            ->orderBy('id_detail','asc')
            ->paginate(10);
        return view ('reservation.list', compact('details'));
    }
    //Funcion para index de reservacion cliente
    public function clientreservation()
    {
        return view('reservation.clientreservation');
    }
    public function create()
    {
        return view('reservation.register');
    }

    public function store(Request $request)
    {
        $cantidadAdulto = $request->input('cantidadAdulto');
        if($request->input('cantidadNino'))
        {
            $cantidadNino   = $request->input('cantidadNino');
            }
        else
        {
        $cantidadNino   = 0;
        }
        $idPerson       = $request->input('id-person');
        $roomType       = $request->input('room-type');
        $quantity       = $cantidadAdulto + $cantidadNino;
        $checkIn        = date("Y-m-d",strtotime($request->input('check_in')));
        $checkOut       = date("Y-m-d",strtotime($request->input('check_out')));
        $role_id        = $request->input('role_id');
        if($role_id == 1)
        {
        $tipo = 'interno';
        }
        else
        {
        $tipo = 'externo';
        }
        /** @var $reservation
        *  Realizamos el registro de la reserva con los datos personales, checkin, chekout
        */
        $reservation = new Reservations();
        $reservation->date              =   date('Y-m-d');
        $reservation->ckechin           =   $checkIn;
        $reservation->ckechout          =   $checkOut;
        $reservation->type_reservation  =   $tipo;
        $reservation->total             =   0;
        $reservation->user_id           =   $idPerson;
        $reservation->save();
        $reservation_id = Reservations::all()->last();

        $data = DB::table('rooms')
        ->join('room_types', 'room_types.id_room_type', '=', 'rooms.room_type_id')
        ->where('room_types.id_room_type', '=', $roomType)
        ->where('rooms.availability', '=', 'available')
        ->where('rooms.quantity', '>=', $quantity)
        ->first();


        $days	= (strtotime($checkIn)-strtotime($checkOut))/86400;
        $days 	= abs($days); $dias = floor($days);
        $details = new Details();
        $details->sub_total         = $data->price;
        $details->nights            = $days;
        $details->room_id           = $data->id_room;
        $details->reservation_id    = $reservation_id->id_reservation;
        $details->save();

        Rooms::where('id_room', $data->id_room)
        ->update(['availability' => 'check-in']);

        /*$details = DB::table('details')
        ->join('rooms', 'rooms.id_room', '=', 'details.room_id')
        #->join('room_types', 'room_types.id_room_type', '=', 'rooms.room_type_id')
        ->where('details.reservation_id', '=', $reservation_id->id_reservation )
        ->get();

        $reservation = DB::table('reservations')
        ->join('users', 'users.id', '=', 'reservations.user_id')
        ->where('reservations.id_reservation', '=', $reservation_id->id_reservation)
        ->get();*/
    return redirect('/reservations/'.$reservation_id->id_reservation);
    }


    public function show()
    {
    //
        $reservation = DB::table('reservations')
            ->get();
        return response()->json($reservation);
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
    /* public function autocomplete(Request $request)
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
    }*/

    public function autocompleteCliente(Request $request)
    {
        $term = $request->term;
        $data = DB::table('people')
            ->join('users', 'users.person_id', '=', 'people.id_person')
            ->where('name','LIKE','%'.$term.'%')
            ->orWhere('last_name','LIKE','%'.$term.'%')
            ->orWhere('ndi','LIKE','%'.$term.'%')
            ->take(5)
            ->get();
        $result = array();
        foreach ($data as $key => $value)
        {
            $result[] = ['value' =>'Cliente : '.$value->last_name.' '.$value->name.' | NITCI: '.$value->ndi, 'id'=>$value->id];
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
        $cantidadAdulto = $request->input('cantidadAdulto');
        if($request->input('cantidadNino'))
        {
            $cantidadNino   = $request->input('cantidadNino');
        }
        else{
            $cantidadNino   = 0;
        }
        #$idPerson       = $request->input('id-person');
        $roomType       = $request->input('room-type');
        $quantity       = $cantidadAdulto + $cantidadNino;
       # $checkIn        = $request->input('check_in');
       # $checkOut       = $request->input('check_out');

        $data = DB::table('rooms')
            ->join('room_types', 'room_types.id_room_type', '=', 'rooms.room_type_id')
            ->where('room_types.id_room_type', '=', $roomType)
            ->where('rooms.availability', '=', 'available')
            ->where('rooms.quantity', '>=', $quantity)
            ->first();
        if(!empty($data))
        {
            $result = 1;
            $price = $data->price;
        }
        else
        {
            $result = 0;
            $price = 0;
        }

        $search = "<table class='responsive-table'>";
        $search .= "<tbody>";
        $search .= "<tr><th data-field='id'>Numero de Habitaciones</th><th >1</th></tr>";
        $search .= "<tr><th data-field='id'>Numero de Adultos</th><th >$cantidadAdulto</th></tr>";
        $search .= "<tr><th data-field='id'>Numero de Ninos</th><th >$cantidadNino</th></tr>";
        $search .= "<tr><th data-field='id'>Noches</th><th ></th></tr>";
        $search .= "<tr><th data-field='id'>Precio por noche</th><th >$price</th></tr>";
        $search .= "</tbody>";
        $search .= "</table>";
        return response()->json(['x'=> $result,'search'=>$search]);
    }

    public function reservationRegister(Request $request)
    {
        $cantidadAdulto = $request->input('cantidadAdulto');
        if($request->input('cantidadNino'))
        {
            $cantidadNino   = $request->input('cantidadNino');
        }
        else
        {
            $cantidadNino   = 0;
        }
        $idPerson       = $request->input('id-person');
        $roomType       = $request->input('room-type');
        $quantity       = $cantidadAdulto + $cantidadNino;
        $checkIn        = date("Y-m-d",strtotime($request->input('check_in')));
        $checkOut       = date("Y-m-d",strtotime($request->input('check_out')));
        $role_id        = $request->input('role_id');
        if($role_id == 1)
        {
            $tipo = 'interno';
        }
        else
        {
            $tipo = 'externo';
        }
        /** @var $reservation
         *  Realizamos el registro de la reserva con los datos personales, checkin, chekout
         */
        $reservation = new Reservations();
        $reservation->date              =   date('Y-m-d');
        $reservation->ckechin           =   $checkIn;
        $reservation->ckechout          =   $checkOut;
        $reservation->type_reservation  =   $tipo;
        $reservation->total             =   0;
        $reservation->user_id           =   $idPerson;
        $reservation->save();
        $reservation_id = Reservations::all()->last();

        $data = DB::table('rooms')
            ->join('room_types', 'room_types.id_room_type', '=', 'rooms.room_type_id')
            ->where('room_types.id_room_type', '=', $roomType)
            ->where('rooms.availability', '=', 'available')
            ->where('rooms.quantity', '>=', $quantity)
            ->first();

        $details = new Details();
        $details->sub_total         = $data->price;
        $details->nights            = 1;
        $details->room_id           = $data->id_room;
        $details->reservation_id    = $reservation_id->id_reservation;
        $details->save();

        Rooms::where('id_room', $data->id_room)
                ->update(['availability' => 'check-in']);
        $details= DB::table('details')
            ->join('rooms', 'rooms.id_room', '=', 'details.room_id')
            #->join('room_types', 'room_types.id_room_type', '=', 'rooms.room_type_id')
            ->where('details.reservation_id', '=', $reservation_id->id_reservation )
            ->get();

        return view('reservation.register', compact('details'));

    }

    public function editReservations($id_reservation)
    {
       // $id_reservation = Reservations::all()->last();
        $roomTypes = DB::table('room_types')
            ->get();
        $details = DB::table('details')
            ->join('rooms', 'rooms.id_room', '=', 'details.room_id')
            ->join('room_types', 'room_types.id_room_type', '=', 'rooms.room_type_id')
            ->where('details.reservation_id', '=',$id_reservation)
            ->get();

        $reservation = DB::table('reservations')
            ->join('users', 'users.id', '=', 'reservations.user_id')
            ->join('people', 'people.id_person' , '=', 'users.person_id')
            ->where('reservations.id_reservation', '=', $id_reservation)
            ->first();
        $service = DB::table('services_details')
            ->leftJoin('services', 'services.id_service', '=', 'services_details.service_id')
            ->leftJoin('details', 'details.id_detail', '=', 'services_details.detail_id')
            ->where('details.reservation_id', '=',$id_reservation )
            ->get([
                'services_details.*',
                'services.*'
            ]);

        return view('reservation.register', compact('details', 'reservation', 'roomTypes', 'service'));
    }
    public function addRoom(Request $request)
    {
        $cantidadAdulto = $request->input('cantidadAdulto');
        if($request->input('cantidadNino'))
        {
            $cantidadNino   = $request->input('cantidadNino');
        }
        else{
            $cantidadNino   = 0;
        }

        $reservation_id = Reservations::all()->last();

        $roomType       = $request->input('room-type');
        $quantity       = $cantidadAdulto + $cantidadNino;
        $data = DB::table('rooms')
            ->join('room_types', 'room_types.id_room_type', '=', 'rooms.room_type_id')
            ->where('room_types.id_room_type', '=', $roomType)
            ->where('rooms.availability', '=', 'available')
            ->where('rooms.quantity', '>=', $quantity)
            ->first();

        $details = new Details();
        $details->sub_total         = $data->price;
        $details->nights            = 1;
        $details->room_id           = $data->id_room;
        $details->reservation_id    = $reservation_id->id_reservation;
        $details->save();
        Rooms::where('id_room', $data->id_room)
            ->update(['availability' => 'check-in']);

        return response()->json(['result'=> true]);
    }
    public function ApiGetReservation()
    {
        $reservation = DB::table('reservations')
            ->get();
        return response()->json($reservation);
    }
    public function deleteDetail(Request $request)
    {
       ServicesDetails::where('detail_id',$request->id)->delete();
       Details::where('id_detail',$request->id)->delete();
        Rooms::where('id_room', $request->id_room)
            ->update(['availability' => 'available']);
       return response()->json($request->id);
    }
    public function addServices(Request $request)
    {
       $id_reservation = $request->input('id_reservation');
       $id_detail = $request->input('id_detail');
       $price = $request->input('price');
        $contador = 0;
        foreach ($request->input('service') as $services => $service)
        {
            if($contador == 0)
            {
                $decorator = new $service(new \Room($price));
            }
            else
            {
                $decorator = new $service($decorator);
            }
            $contador++;
            if($service == 'Cuna'){
                $id_service = $contador;
                $serviceDetails = new ServicesDetails();
                $serviceDetails->sub_total = 150;
                $serviceDetails->service_id = $id_service;
                $serviceDetails->detail_id = $id_detail;
                $serviceDetails->save();
            }
            if($service == 'Cama') {
                $id_service = $contador;
                $serviceDetails = new ServicesDetails();
                $serviceDetails->sub_total = 300;
                $serviceDetails->service_id = $id_service;
                $serviceDetails->detail_id = $id_detail;
                $serviceDetails->save();
            }
            if($service == 'Wifi'){
                $id_service = $contador;
                $serviceDetails = new ServicesDetails();
                $serviceDetails->sub_total = 150;
                $serviceDetails->service_id = $id_service;
                $serviceDetails->detail_id = $id_detail;
                $serviceDetails->save();
            }
            if($service == 'Restaurante'){
                $id_service = $contador;
                $serviceDetails = new ServicesDetails();
                $serviceDetails->sub_total = 150;
                $serviceDetails->service_id = $id_service;
                $serviceDetails->detail_id = $id_detail;
                $serviceDetails->save();
            }
            if($service == 'Limpieza'){
                $id_service = $contador;
                $serviceDetails = new ServicesDetails();
                $serviceDetails->sub_total = 150;
                $serviceDetails->service_id = $id_service;
                $serviceDetails->detail_id = $id_detail;
                $serviceDetails->save();
            }
        }
        $subtotal = $decorator->getBaseCost();
        Details::where('id_detail', $id_detail)
            ->update(['sub_total' => $subtotal]);
        return redirect('/reservations/'.$id_reservation);
    }
}
