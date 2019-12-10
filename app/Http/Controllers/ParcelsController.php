<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParcelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcels = \App\Parcel::orderBy('created_at', 'DESC')->get();
        return view('parcels.index', compact('parcels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parcels.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parcel = new Parcel();
        $parcel->weight = $request->input('weight');
        $parcel->place_departure = $request->input('place_departure');
        $parcel->description = $request->input('description');
        $parcel->save();
        return redirect('/');
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
        $parcel =\App\Parcel::find($id);//on recupere le parcels
        return view('parcels.edit', compact('parcels'));

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
        $parcel = \App\Parcel::find($id);
        if($parcel){
            $parcel->update([
                'weight' => $request->input('weight'),
                'place_departure' => $request->input('place_departure'),
                'description' => $request->input('description'),
            ]);
        }
        return redirect()->back();
     
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
