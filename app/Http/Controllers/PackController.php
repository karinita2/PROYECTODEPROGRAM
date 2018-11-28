<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pack;
use DB;
class PackController extends Controller
{
    /**
     * Mostrar una lista del recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packs = DB::table('packs')

            ->paginate(6);

        return view('pack.read', compact('packs'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
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
        $pack=new Pack();
        $pack->pack        = $request->pack;
        $pack->price       = $request->price;
        $pack->description = $request->description;

        $pack->save();
        $pack = Pack::all()->last();
        return response()->json($pack);

    }

    /**
     * Mostrar el recurso especificado
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
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
    public function update(Request $request)
    {

        DB::table('packs')
            ->where('id_pack', $request->id_pack)
            ->update(['pack' => $request->pack]);


        //
        /*
        $pack = Pack::find($request->id_pack);
        $pack->pack       = $request->pack;
        $pack->price  = $request->price;
        $pack->save();
        return response()->json($pack);
        */
    }

    /**
     * Eliminar el recurso especificado del almacenamiento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::table('packs')->where('id_pack',$request->id_pack)->delete();
        return response()->json();
        //
        //DB::table('packs')->where('id_pack', $id)->delete();
        //return redirect()->back();
    }
}
