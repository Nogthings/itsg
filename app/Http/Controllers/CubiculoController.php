<?php

namespace App\Http\Controllers;

use App\Models\Cubiculo;
use Illuminate\Http\Request;

class CubiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cubiculos');
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
     * @param  \App\Models\Cubiculo  $cubiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Cubiculo $cubiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cubiculo  $cubiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cubiculo $cubiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cubiculo  $cubiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cubiculo $cubiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cubiculo  $cubiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cubiculo $cubiculo)
    {
        //
    }
}
