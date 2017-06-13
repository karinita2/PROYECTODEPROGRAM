<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    public function index()
    {
        $roomTypes = DB::table('room_types')
            ->get();
        return view('reservasgrupales.groupindex', compact('roomTypes'));
    }
}
