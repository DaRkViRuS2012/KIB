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
use App\News;
use App\Sms_helper;
use App\ApplicationOption;
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
    $service;
    if (count($services)> 0 ){
        $service = $services[0];
        //dd($service);
        return redirect('/service/'.$service->id.'/show');
    }

    return view('main_site.services',compact('services','partners'));
}



public function service_sons(Request $request)
{
    $id=$request['id'];
    $services=Service::service_index_fathers();
    $main_service=Service::service_show($id);
    return view('main_site.service_sons',compact('services','main_service'));
}


public function product_sons(Request $request)
{
    $id=$request['id'];
    $products=Service::product_index_fathers();
    $main_service=Service::product_show($id);
    $partners=Partner::partner_index();
    return view('main_site.product_sons',compact('products','partners','main_service'));
}


public function products()
{
    $products=Service::product_index_fathers();
    $partners=Partner::partner_index();
    $product;
    
    if (count($products)> 0 ){
        $product = $products[0];
        //dd($service);
        return redirect('/product/'.$product->id.'/show');
    }
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

    public function application_store(Request $request)
    {
        $applicant_name_en=$request['fname_en'].' '.$request['father_name_en'].' '.$request['lname_en'];
        $applicant_name_ar=$request['fname_ar'].' '.$request['father_name_ar'].' '.$request['lname_ar'];
        $service_id=$request['sub_service'];
        // $user_id=Auth::user()->id;
        $user_id=1;
        $code=Sms_helper::RandomString();
        $date=date('Y-m-d H:i:s');
        $service=Service::service_show($service_id);
       $application=Application::application_create($applicant_name_en,$applicant_name_ar,$service_id,$user_id,$date,$code);
        foreach ($service->options as $key => $option) {
            $option_id=$option->id;
            $name=$option->title;
            $application_id=$application->id;
            $option_name=$option->title;
            $option_value=$request[$name];
           ApplicationOption::application_option_create($option_id,$option_value,$application_id);
        }
        return redirect('/');
    }

    public function news_index()
    {
        $news=News::news_index();
        return view('main_site.news',compact('news'));
    }


       public function news_show($id)
    {
        $news=News::news_show($id);
        return view('main_site.news_single',compact('news'));
    }


 
}
