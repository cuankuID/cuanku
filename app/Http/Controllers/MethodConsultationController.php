<?php

namespace App\Http\Controllers;

use App\Models\MethodConsultation;
use Illuminate\Http\Request;

class MethodConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param  \App\Models\MethodConsultation  $methodConsultation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return MethodConsultation::where('id', $id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MethodConsultation  $methodConsultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MethodConsultation $methodConsultation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MethodConsultation  $methodConsultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(MethodConsultation $methodConsultation)
    {
        //
    }
}
