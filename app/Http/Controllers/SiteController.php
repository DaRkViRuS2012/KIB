<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Slider;
class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function services()
{
    $services=Service::service_index();
    return view('main_site.services',compact('services'));
}


public function services_single($id)
{
    $service=Service::service_show($id);
    // return $service;
    return view('main_site.service_single',compact('service'));
}

public function index()
{
	
}
}
