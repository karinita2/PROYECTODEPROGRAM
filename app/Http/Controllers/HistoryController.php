<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class HistoryController extends Controller
{
    
    public function index()
    {

            $reservaciones = DB::table('reservations')
            ->where('reservations.user_id', '=', Auth::user()->id)
            ->paginate(10);

        return view('user.history',compact('reservaciones'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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
}
