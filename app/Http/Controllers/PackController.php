<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pack;
use DB;
class PackController extends Controller
{
    /**
     * Display a listing of the resource.
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
        $pack=new Pack();
        $pack->pack        = $request->pack;
        $pack->price       = $request->price;
        $pack->description = $request->description;

        $pack->save();
        $pack = Pack::all()->last();
        return response()->json($pack);

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
        //

    }

    /**
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
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
