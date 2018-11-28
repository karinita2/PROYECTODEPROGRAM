<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Repositories\RoomRepository;

class RoomController extends Controller
{
    public function __construct(RoomRepository $roomy)
    {
        $this->roomy = $roomy;
    }

    public function index()
    {

        /*Conectando las tablas de rooms, room_types, reservations, details para sacar detalles de la habitacion*/
        $search = \Request::get('search');
        /*
        $rooms = DB::table('rooms')
            ->leftjoin('room_types', 'room_types.id_room_type', '=', 'rooms.room_type_id')
            ->leftjoin('details','rooms.id_room','=','details.room_id')
            ->leftjoin('reservations','reservations.id_reservation','=','details.reservation_id')
            ->where('rooms.name','like','%'.$search.'%')
            ->orWhere('room_types.room_type','like','%'.$search.'%')
            ->orWhere('rooms.availability','like','%'.$search.'%')
            ->orderBy('id_room','asc')
            ->paginate(10);

*/
        /*
        $search = \Request::get('search');
        $rooms = DB::table('rooms')
            ->join('room_types', function ($join){
                $join->on('rooms.room_type_id', '=', 'room_types.id_room_type')
                    ->join('details','rooms.id_room','=','details.room_id')
                    ->join('reservations','reservations.id_reservation','=','details.reservation_id');
            })

            ->paginate(10);

        */
        $rooms= $this->roomy->getRoomTypes();
        return view('room.room',compact('rooms'));
    }
    public function create()
    {
        //
    }

    /**
     * Almacenar un recurso recién creado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Mostrar el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Mostrar el formulario para editar el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Actualizar el recurso especificado en el almacenamiento.
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
     * Eliminar el recurso especificado del almacenamiento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
