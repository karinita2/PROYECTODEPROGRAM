<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RoomController extends Controller
{
    public function index()
    {

        /*Conectando las tablas de rooms, room_types, reservations, details para sacar detalles de la habitacion*/
        /*$search = \Request::get('search');
        $rooms = DB::table('rooms')
            ->join('room_types', 'room_types.id_room_type', '=', 'rooms.room_type_id')
            ->join('details','rooms.id_room','=','details.room_id')
            ->join('reservations','reservations.id_reservation','=','details.reservation_id')
            ->where('rooms.name','like','%'.$search.'%')
            ->orWhere('room_types.room_type','like','%'.$search.'%')
            ->orWhere('rooms.availability','like','%'.$search.'%')
            ->orderBy('id_room','asc')
            ->paginate(10);*/
        $search = \Request::get('search');
        $rooms = DB::table('rooms')
            ->join('room_types', function ($join){
                $join->on('rooms.room_type_id', '=', 'room_types.id_room_type')
                    ->join('details','rooms.id_room','=','details.room_id')
                    ->join('reservations','reservations.id_reservation','=','details.reservation_id');
            })

            ->paginate(10);
        return view('room.room',compact('rooms'));
    }
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
    public function store(Request $request)
    {
        //
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
