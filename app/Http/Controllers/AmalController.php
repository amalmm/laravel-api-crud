<?php

namespace App\Http\Controllers;

use App\Models\Amal;
use Illuminate\Http\Request;

class AmalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Amal::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Amal;
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->save();

        return $post;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Amal  $amal
     * @return \Illuminate\Http\Response
     */
    public function show(Amal $amal)
    {
        return $amal;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Amal  $amal
     * @return \Illuminate\Http\Response
     */
    public function edit(Amal $amal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Amal  $amal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amal $amal)
    {
        $amal->name = $request->input('name');
        $amal->email = $request->input('email');
        $amal->save();
        return $amal;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Amal  $amal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amal $amal)
    {
        $amal->delete();
        return "success";
    }
}
