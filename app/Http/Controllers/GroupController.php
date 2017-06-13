<?php

namespace App\Http\Controllers;

use App\Person;
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




}
