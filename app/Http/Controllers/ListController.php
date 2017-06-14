<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ListController extends Controller
{

    public function index()
    {
        return view('reservation.list');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id_reservation)
    {
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
        return view('reservation.viewReservation', compact('details', 'reservation', 'roomTypes', 'service'));
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
}
