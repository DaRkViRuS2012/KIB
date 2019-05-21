<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Company;
use App\Media;
use Illuminate\Support\Facades\Storage;
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
            foreach ($services as $service) {
            foreach ($service->media as $media1) {
                $media1->url=env('website_link').env('image_storage').$media1->url;
            }
        }
         return response()->json(['status' => True, 'data' => $services, 'message' => '','type'=>'array']);
    }


    public function get_sons_api($service_id)
    {
        $services=Service::service_index_sons($service_id);
        return response()->json(['status' => True, 'data' => $services, 'message' => '','type'=>'array']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Service::service_index();
        $companies=Company::company_index();
        return view('admin.service.create',compact('services','companies'));
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
        $content_type='service';
        $service=Service::service_create($en_title,$ar_title,$en_subtitle,$ar_subtitle,$en_description,$ar_description,$parent_id,$quotation_id,$company_id,$portal_link);
                    if($request->hasFile('image')){
            foreach($request->file('image') as $file) {                    
            $imagename=$file->getClientOriginalName();
            $path_img=$file->storeAs('public/',time().$imagename);
             $img_name=str_replace('public/', '', $path_img);
             Media::media_create($img_name,'image',$service->id,$content_type);
             }
             return redirect('/admin/service/index');
        }
    return Redirect::back()->withErrors('The image input must not be empty');
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
    public function edit($id)
    {
        $services=Service::service_index_fathers();
        $service=Service::service_show($id);
        return view('admin.service.update',compact('service','services'));
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
        $id=$request['id'];
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
        Service::service_create($id,$en_title,$ar_title,$en_subtitle,$ar_subtitle,$en_description,$ar_description,$parent_id,$quotation_id,$company_id,$portal_link);
          return redirect('/admin/service/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
  

      public function delete($id)
    {
        $service=News::service_show($id);
        foreach ($service->media as $image) {
        Storage::delete('public'.$image->url);
        }
        service::service_delete($id);
return redirect('/admin/service/index'); 
    }
}
