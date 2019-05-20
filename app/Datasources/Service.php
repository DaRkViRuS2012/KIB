<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     protected $fillable = [
        'en_title', 'ar_title','en_subtitle','ar_subtitle','en_description','ar_description','parent_id','quotation_id','company_id','portal_link','active'
    ];

       public function media()
    {
        return $this->hasMany('App\Media','content_id')->where('content_type','service');
    }

    public function options()
    {
        return $this->hasMany('App\Option');
    }

    public function company()
    {
    	return $this->BelongsTo('App\Company','company_id');
    }

        public function service()
    {
    	return $this->BelongsTo('App\Service','parent_id');
    }


    public static function service_index()
    {
    	$services=Service::with('media','service','company','options')->get();
    	return $services;
    }

     public static function service_index_fathers()
    {
        $services=Service::where('parent_id','0')->with('media','service','company')->get();
        return $services;
    }


      public static function service_index_sons($service_id)
    {
        $services=Service::where('parent_id',$service_id)->with('media','service','company')->get();
        return $services;
    }


    public static function service_create($en_title,$ar_title,$en_subtitle,$ar_subtitle,$en_description,$ar_description,$parent_id,$quotation_id,$company_id,$portal_link)
    {
    	$service=new Service;
    	$service->en_title=$en_title;
    	$service->ar_title=$ar_title;
    	$service->en_subtitle=$en_subtitle;
        $service->ar_subtitle=$ar_subtitle;
    	$service->en_description=$en_description;
    	$service->ar_description=$ar_description;
    	$service->parent_id=$parent_id;
    	$service->quotation_id=$quotation_id;
    	$service->company_id=$company_id;
    	$service->portal_link=$portal_link;
    	$service->active=1;
    	$service->save();
    	return $service;
    }


        public static function service_update($id,$en_title,$ar_title,$en_subtitle,$ar_subtitle,$en_description,$ar_description,$parent_id,$quotation_id,$company_id,$portal_link)
    {
    	$service=Service::find($id);
    	$service->en_title=$en_title;
    	$service->ar_title=$ar_title;
    	$service->en_subtitle=$en_subtitle;
        $service->ar_subtitle=$ar_subtitle;
    	$service->en_description=$en_description;
    	$service->ar_description=$ar_description;
    	$service->parent_id=$parent_id;
    	$service->quotation_id=$quotation_id;
    	$service->company_id=$company_id;
    	$service->portal_link=$portal_link;
    	$service->save();
    	return $service;
    }

        public static function service_delete($id)
    {
    	$service=Service::find($id);
    	$service->delete();
    }
        public static function service_show($id)
    {
        $service=Service::where('id',$id)->with('media','service','company')->first();
        return $service;
    }

    public static function service_active($id)
    {
    	$service=Service::find($id);
    	if ($service->active=='active') {
    		$service->active='inactive';
    	}
    	else
    	{
    		$service->active='active';
    	}
    }

}
