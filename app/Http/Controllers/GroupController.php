<?php

namespace App\Http\Controllers;

use App\Details;
use App\Person;
use App\Reservations;
use App\Rooms;
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
        return redirect('/reservations/'.$reservation_id->id_reservation);
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




}
