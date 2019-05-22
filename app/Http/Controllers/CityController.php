<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities=City::city_index();
        return  view('admin.city.index',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities=City::city_parent_index();
        return view('admin.city.create',compact('cities'));
    }


        public function get_cities_api(Request $request)
    {
        $city_id=$request['city_id'];
        $cities=City::get_cities($city_id);
         return response()->json(['status' => True, 'data' => $cities, 'message' => '','type'=>'array']);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ar_title=$request['ar_title'];
        $en_title=$request['en_title'];
        $city_id=$request['city_id'];

        City::city_create($ar_title,$en_title,$city_id);

       return redirect('admin/city/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $cities=City::city_parent_index();
        $city=City::city_show($id);
        return view('admin.city.update',compact('city','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request['id'];
        $ar_title=$request['ar_title'];
        $en_title=$request['en_title'];
        $city_id=$request['city_id'];

        City::city_update($id,$ar_title,$en_title,$city_id);
        return redirect('admin/city/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $city=City::city_delete($id);
        return redirect('admin/city/index');
    }
}
