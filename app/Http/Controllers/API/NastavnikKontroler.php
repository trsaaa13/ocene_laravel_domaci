<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Nastavnik;
use Illuminate\Http\Request;

class NastavnikKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'Nastavnici: ' => Nastavnik::all()
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
     * @param  \App\Models\Nastavnik  $nastavnik
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nastavnik = Nastavnik::find($id);

        return response()->json([
            'Nastavnik: ' => $nastavnik
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nastavnik  $nastavnik
     * @return \Illuminate\Http\Response
     */
    public function edit(Nastavnik $nastavnik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nastavnik  $nastavnik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nastavnik $nastavnik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nastavnik  $nastavnik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $success = Nastavnik::find($id)->delete();

        return response()->json([
            'Info: ' => 'Nastavnik je obrisan iz baze podataka!',
            'Success: ' => $success
        ]);
    }
}
