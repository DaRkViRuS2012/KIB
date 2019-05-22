<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Slider;
use App\Gallery;
use App\Application;
use App\Media;
use App\Option;
use App\Partner;
class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function services()
{
    $services=Service::service_index_fathers();
    $partners=Partner::partner_index();
    if (count($services)> 0 ){
        
    }
    return view('main_site.services',compact('services','partners'));
}



public function service_sons(Request $request)
{
    $id=$request['id'];
    $services=Service::service_index_fathers();
    $main_service=Service::service_show($id);
    $partners=Partner::partner_index();
    return view('main_site.service_sons',compact('services','partners','main_service'));
}

public function products()
{
    $products=Service::product_index_fathers();
    $partners=Partner::partner_index();
    return view('main_site.products',compact('products','partners'));
}




public function services_single($id)
{
    $service=Service::service_show($id);
    // return $service;
    return view('main_site.service_single',compact('service'));
}

public function product_single($id)
{
    $product=Service::product_show($id);
    // return $service;
    return view('main_site.product_single',compact('product'));
}


public function index()
{
	
}

public function galleries()
{
    $galleries=Gallery::gallery_index();
        return view('main_site.galleries',compact('galleries'));
}


  public function gallery(Request $request)
    {
        $gallery_id=$request['gallery_id'];
        $gallery=Gallery::gallery_show($gallery_id);
       return view('main_site.gallery',compact('gallery'));
    }

    public function application_create()
    {
        $services=Service::service_index_fathers();
        return view('main_site.application_create',compact('services'));
    }

    public function application_store()
    {
        
    }
}
