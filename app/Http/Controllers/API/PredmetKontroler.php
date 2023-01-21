<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Predmet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PredmetKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'Predmeti: ' => Predmet::all()
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $predmet = Predmet::find($id);

        return response()->json([
            'Predmet: ' => $predmet
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function edit(Predmet $predmet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required',
            'razred' => 'required',
            'nastavnik_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'Error! ' => $validator->errors()
            ]);
        }

        $predmet = Predmet::find($id);
        $predmet->naziv = $request->naziv;
        $predmet->razred = $request->razred;
        $predmet->nastavnik_id = $request->nastavnik_id;
        $predmet->save();

        return response()->json([
            'Info: ' => 'Predmet je izmenjen u bazi podataka!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Predmet $predmet)
    {
        //
    }
}
