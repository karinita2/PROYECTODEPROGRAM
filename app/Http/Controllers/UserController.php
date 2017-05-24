<?php

namespace App\Http\Controllers;

use App\Person;
use App\User;
use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
            ->join('people', 'people.id_person', '=', 'users.person_id')
            ->join('roles', 'roles.id_role', '=', 'users.role_id')
            ->get();
        return view('user.read', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $role = 1;
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
        $role = 1;
        return User::create([
            #'name'              => $data['name'],
            'email'             => $data['email'],
            'password'          => bcrypt($data['password']),
            'role_id'           => $role,
            'person_id'        => $model->id_person,
        ]);
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
    public function edit(Request $request)
    {

        $person = Person::find($request->id_person);
        $person->name       = $request->name;
        $person->last_name  = $request->last_name;
        $person->phone      = $request->phone;
        $person->sex        = $request->sex;
        $person->nationality= $request->nationality;
        $person->save();
        return response()->json($person);
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
        User::findOrFail($id)->delete();
        Person::where('id_person',$id)->delete();

        return redirect()->back();
    }

    public function deleteUser(Request $request)
    {
        User::find($request->id)->delete();
        Person::where('id_person',$request->id_person)->delete();
        return response()->json();
    }
}
