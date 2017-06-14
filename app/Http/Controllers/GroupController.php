<?php

namespace App\Http\Controllers;

use App\Details;
use App\Person;
use App\Reservations;
use App\Rooms;
use App\ServicesDetails;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
            ->join('people', 'people.id_person', '=', 'users.person_id')
            ->join('roles', 'roles.id_role', '=', 'users.role_id')
            ->get();
        return view('reservasgrupales.groupindex', compact('users'));
    }
    public function findUser(Request $request)
    {

        $person = Person::find($request->person_id);
        return response()->json($person);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */

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

        /*$details = DB::table('details')
        ->join('rooms', 'rooms.id_room', '=', 'details.room_id')
        #->join('room_types', 'room_types.id_room_type', '=', 'rooms.room_type_id')
        ->where('details.reservation_id', '=', $reservation_id->id_reservation )
        ->get();

        $reservation = DB::table('reservations')
        ->join('users', 'users.id', '=', 'reservations.user_id')
        ->where('reservations.id_reservation', '=', $reservation_id->id_reservation)
        ->get();*/
        return redirect('/groupreservations/'.$reservation_id->id_reservation);
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
        $search .= "</table>";
        return response()->json(['x'=> $result,'search'=>$search]);
    }


    public function storeEncargado(Request $request)
    {
        $person=new Person();
        $person->name        = $request->name;
        $person->last_name    = $request->last_name;
        $person->phone       = $request->phone;
        $person->sex         = $request->sex;
        $person->nationality = $request->nationality;
        $person->ndi         ="22222223";
        // $person->ndi         = $request->ndi;
        $person->save();


        $model = Person::all()->last();
        $role = 2;
        $user = new User();
#'name'              => $data['name'],
        $user->email       = $request->email;
        $user->password    = bcrypt($request->password);
        $user->role_id     = $role;
        $user->person_id   = $model->id_person;
        $user->save();
        return response()->json($person);

    }

    public function createuser(array $data)
    {
        $persona = Person::create([
            'name'                  => $data['nombres'],
            'last_name'             => $data['apellido'],
            'phone'                 => $data['celular'],
            'sex'                   => $data['sexo'],
            'nationality'           => $data['nacionalidad'],
            'ndi'                   => $data['ndi'],
            #'carnet'                => $data['carnet'],
            #'direccion'             => $data['direccion'],
            #'foto'                  => $data['foto'],
        ]);

        $model = Person::all()->last();
        $role = 2;
        return User::create([
            #'name'              => $data['name'],
            'email'             => $data['email'],
            'password'          => bcrypt($data['password']),
            'role_id'           => $role,
            'person_id'        => $model->id_person,
        ]);
    }
    public function autocompleteEncargado(Request $request)
    {
        $term = $request->term;
        $data = DB::table('people')
            ->join('users', 'users.person_id', '=', 'people.id_person')
            ->join('roles', 'roles.id_role', '=', 'users.role_id')
            ->Where('id_role',2)
            ->orwhere('name','LIKE','%'.$term.'%')
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

        return view('reservasgrupales.groupregister', compact('details', 'reservation', 'roomTypes','service'));
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

    public function addAmbientes(Request $request)
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
            if($service == 'Conferencia'){
                $id_service = $contador;
                $serviceDetails = new ServicesDetails();
                $serviceDetails->sub_total = 15000;
                $serviceDetails->service_id = $id_service;
                $serviceDetails->detail_id = $id_detail;
                $serviceDetails->save();
            }
            if($service == 'Eventos') {
                $id_service = $contador;
                $serviceDetails = new ServicesDetails();
                $serviceDetails->sub_total = 3000;
                $serviceDetails->service_id = $id_service;
                $serviceDetails->detail_id = $id_detail;
                $serviceDetails->save();
            }
            if($service == 'Reuniones'){
                $id_service = $contador;
                $serviceDetails = new ServicesDetails();
                $serviceDetails->sub_total = 1500;
                $serviceDetails->service_id = $id_service;
                $serviceDetails->detail_id = $id_detail;
                $serviceDetails->save();
            }

        }
        $subtotal = $decorator->getBaseCost();
        Details::where('id_detail', $id_detail)
            ->update(['sub_total' => $subtotal]);
        return redirect('/groupreservations/'.$id_reservation);
    }




}
