<?php

namespace App\Http\Controllers;

use App\Person;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class ProfileController extends Controller
{

    public function index()
    {
        $users = DB::table('users')
            ->join('people', 'people.id_person', '=', 'users.person_id')
            ->join('roles', 'roles.id_role', '=', 'users.role_id')
            ->get();
    //return $users;
       return view('profile.profile', compact('users'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        //
    }

    public function edit(Request $request)
    {
        $person = Person::find($request->id_person);
       // $person->name       = $request->name;
        //$person->last_name  = $request->last_name;
       // $person->phone      = $request->phone;
        //$person->sex        = $request->sex;
      //  $person->nationality= $request->nationality;
        return view('profile.edit',['user'=>$person]);
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
