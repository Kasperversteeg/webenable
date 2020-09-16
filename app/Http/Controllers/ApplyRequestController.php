<?php

namespace App\Http\Controllers;

use App\Models\ApplyRequest;
use Illuminate\Http\Request;

class ApplyRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('application-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('application-create');
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
     * @param  \App\Models\ApplyRequest  $applyRequest
     * @return \Illuminate\Http\Response
     */
    public function show(ApplyRequest $applyRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplyRequest  $applyRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplyRequest $applyRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApplyRequest  $applyRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApplyRequest $applyRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplyRequest  $applyRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplyRequest $applyRequest)
    {
        //
    }
}
