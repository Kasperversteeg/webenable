<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Requests\ApplicationRequest;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $components = [
            'applications' => Application::all(),
        ];
        return view('application-index', $components);
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
    public function store(ApplicationRequest $request, Application $application)
    {
       $application->gender = $request->get('gender');
       $application->name = $request->get('name');
       $application->surname = $request->get('surname');
       $application->mail = $request->get('mail');
       $application->phone = $request->get('phone');
       $application->residence = $request->get('residence');
       $application->expertise = $request->get('expertise');
       $application->education = $request->get('education');
       $application->function = $request->get('function');
       $application->reason = $request->get('reason');
       $application->location = $request->get('location');
       $application->remark = $request->get('remark');
       
       $application->save();

       return redirect()->route('application.index')->with('succes', 'Uw inschrijving is ontvangen!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $Application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        $components = [
            'application' => $application,
        ];
        return view('application-show', $components);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $Application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $Application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $Application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $Application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $Application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $Application)
    {
        //
    }
}
