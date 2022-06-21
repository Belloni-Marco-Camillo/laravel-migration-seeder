<?php

namespace App\Http\Controllers;

use App\viaggi;
use Illuminate\Http\Request;
use Viaggis;

class ViaggiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viaggis = Viaggi::all();
        //dd($viaggis);
       return view('home',compact('viaggis'));
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
     * @param  \App\viaggi  $viaggi
     * @return \Illuminate\Http\Response
     */
    public function show(viaggi $viaggi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\viaggi  $viaggi
     * @return \Illuminate\Http\Response
     */
    public function edit(viaggi $viaggi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\viaggi  $viaggi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, viaggi $viaggi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\viaggi  $viaggi
     * @return \Illuminate\Http\Response
     */
    public function destroy(viaggi $viaggi)
    {
        //
    }
}
