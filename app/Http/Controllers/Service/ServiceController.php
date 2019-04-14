<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::service_index();
        return view('admin.service.index',compact('services'));
    }

     public function index_api()
    {
        $services=Service::service_index();
         return response()->json(['status' => True, 'data' => $services, 'message' => '','type'=>'array']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $en_title =$request['en_title'];
        $ar_title=$request['ar_title'];                                        
        $en_subtitle=$request['en_subtitle'];                                     
        $ar_subtitle=$request['ar_subtitle'];                                     
        $ar_description=$request['ar_description'];                                      
        $en_description=$request['en_description'];                                      
        $parent_id =$request['parent_id'];                                 
        $quotation_id=$request['quotation_id'];                                                                      
        $company_id=$request['company_id'];                               
        $portal_link=$request['portal_link'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $en_title =$request['en_title'];
        $ar_title=$request['ar_title'];                                        
        $en_subtitle=$request['en_subtitle'];                                     
        $ar_subtitle=$request['ar_subtitle'];                                     
        $ar_description=$request['ar_description'];                                      
        $en_description=$request['en_description'];                                      
        $parent_id =$request['parent_id'];                                 
        $quotation_id=$request['quotation_id'];                                                                      
        $company_id=$request['company_id'];                               
        $portal_link=$request['portal_link'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
