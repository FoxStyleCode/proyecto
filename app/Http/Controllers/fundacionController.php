<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fundacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio()
    {
        return view("inicio");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loquesomos()
    {
        return view("LoqueSomos");
    }

    public function loquehacemos()
    {
        return view("LoqueHacemos");
    }

    public function proyectos()
    {
        return view("Proyectos");
    }

    public function loquelogramos()
    {
        return view("LoqueLogramos");
    }

    public function calendario()
    {
        return view("calendario");
    }

    public function blog()
    {
        return view("Blog");
    }

    public function contactos()
    {
        return view("Contactanos");
    }

    public function voluntariado()
    {
        return view("Voluntariado");
    }

    public function donaciones()
    {
        return view("Donaciones");
    }

    public function create()
    {
        return "creacion";
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
        return "Estás accediendo al método edit con el parametro: ".$id;
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
        //
    }
}
