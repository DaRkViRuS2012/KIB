<?php

namespace App\Http\Controllers;

use App\Option;
use App\Service;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options=Option::option_index();
        return view('admin.option.index',compact('options'));
    }


      public function index_api()
    {
        $options=Option::option_index();
        foreach ($options as $key => $option) {
        $values=explode('@',$option->value);
        $option->value=$values;
        }
        
       return response()->json(['status' => True, 'data' => $options, 'message' => '','type'=>'array']);
    }


    public function get_by_service(Request $request)
    {
    $service_id=$request['service_id'];
    $options=Option::get_by_service($service_id);
     return response()->json(['status' => True, 'data' => $options, 'message' => '','type'=>'array']);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Service::product_index();
        return view('admin.option.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title=$request['title'];
        $type=$request['type'];
           $value=$request['value'];
           $attr=$request['attr'];
        
        $service_id=$request['service'];
        if ($type=="input") {
            $value=' ';
        }
        else
        {
            if ($value!=null) {
             
            $value = implode('@', $value);
            }
            
        }
        Option::option_create($title,$type,$value,$service_id,$attr);
        return redirect('/admin/option/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $option=Option::option_show($id);
        $services=Service::service_index();
        return view('admin.option.update',compact('option','services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request['id'];
        $title=$request['title'];
        $type=$request['type'];
        $value=$request['value'];
        $service_id=$request['service'];
        $value = implode('@', $value);
        Option::option_update($id,$title,$type,$value,$service_id);
        return redirect('/admin/option/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Option::option_delete($id);
        return redirect('/admin/option/index');
    }
}
