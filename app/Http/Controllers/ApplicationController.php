<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use App\Option;
use App\Service;
use App\ApplicationOption;
use App\User;
class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $applications=Application::application_index();
         // return $applications;
         return view('admin.application.index',compact('applications'));
    }


        public function index_by_service(Request $request)
    {
        $service_id=$request['service_id'];
         $applications=Application::application_index_by_service($service_id);
         // return $applications;
         return view('admin.application.index_by_service',compact('applications'));
    }
    public function index_api()
    {
    $applications=Application::application_index();
    return response()->json(['status' => True, 'data' => $applications, 'message' => '','type'=>'array']);
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
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id=$request['id'];
        $application=Application::application_show($id);
        // return $application;
        return view('admin.application.application_single',compact('application'));
    }



        public function print(Request $request)
    {
        $id=$request['id'];
        $application=Application::application_show($id);
        // return $application;
        return view('admin.application.application_print',compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id=$request['id'];
        ApplicationOption::application_option_delete($id);
        Application::application_delete($id);
        return redirect('/admin/application/index');
    }
}
