<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
class Service extends Model
{
     protected $fillable = [
        'en_title', 'ar_title','en_subtitle','ar_subtitle','en_description','ar_description','parent_id','','active','type','icon',
    ];

         public function prices()
    {
        return $this->hasMany('App\Price');
    }

    public function media()
    {
        return $this->hasMany('App\Media','content_id')->where('content_type','service');
    }

    public function cover()
    {
        if ($this->media != null){
            if (count($this->media) > 0){
                return $this->media[0]->url;
            }
        }
        return "";
    }

    public function icon()
    {
        if ($this->icon != null){
            return $this->icon;
        }
        return "";
    }

     public function partner()
    {
        return $this->belongsToMany('App\Partner','partner_services')->as('partner')->withPivot('partner_id')->withTimestamps();
    }

    public function product_media()
    {
        return $this->hasMany('App\Media','content_id')->where('content_type','service');
    }

    public function product_cover()
    {
        if ($this->product_media != null){
            if (count($this->product_media) > 0){
                return $this->product_media[0]->url;
            }
        }
        return "";
    }

       public function quotation()
    {
        return $this->hasOne('App\Media','content_id')->where('content_type','service')->where('media_type','quotation');
    }

    public function options()
    {
        return $this->hasMany('App\Option');
    }


        public function sons()
    {
    	return $this->HasMany('App\Service','parent_id');
    }



        public static function index()
    {
        $services=Service::where('parent_id','0')->with('media','sons','options','prices','quotation','partner')->get();
        return $services;
    }


    public static function service_index()
    {
    	$services=Service::where('type','service')->with('media','sons','options','prices','quotation','partner')->get();
    	return $services;
    }



    public static function service_show($id)
    {
        $services=Service::where('type','service')->where('id',$id)->with('media','sons','options','quotation','partner','prices')->first();
        return $services;
    }

    public static function product_show($id)
    {
        $services=Service::where('type','product')->where('id',$id)->with('product_media','sons','options','quotation','prices')->first();
        return $services;
    }



    public static function product_index()
    {
        $services=Service::where('type','product')->with('product_media','sons','options','quotation')->get();
        return $services;
    }

     public static function service_index_fathers()
    {
        $services=Service::where('parent_id','0')->where('type','service')->with('media','sons','quotation','prices')->get();
        return $services;
    }


    public static function product_index_fathers()
    {
        $services=Service::where('parent_id','0')->where('type','product')->with('product_media','sons','quotation')->get();
        return $services;
    }


      public static function service_index_sons($service_id)
    {
        $services=Service::where('parent_id',$service_id)->with('media','sons','quotation','prices','options')->get();
        return $services;
    }

    public static function service_all_sons()
    {
        $services=Service::where('parent_id','!=',0)->where('type','service')->with('media','sons','quotation','prices','options')->get();
        return $services;
    }

      public static function product_all_sons()
    {
        $services=Service::where('parent_id','!=',0)->where('type','product')->with('media','sons','quotation','prices','options')->get();
        return $services;
    }


    public static function service_create($en_title,$ar_title,$en_subtitle,$ar_subtitle,$en_description,$ar_description,$parent_id,$type,$icon)
    {
    	$service=new Service;
    	$service->en_title=$en_title;
    	$service->ar_title=$ar_title;
    	$service->en_subtitle=$en_subtitle;
        $service->ar_subtitle=$ar_subtitle;
    	$service->en_description=$en_description;
    	$service->ar_description=$ar_description;
    	$service->parent_id=$parent_id;
        $service->type=$type;
        $service->icon=$icon;
    	$service->active=1;
    	$service->save();
    	return $service;
    }


    public static function service_update($id,$en_title,$ar_title,$en_subtitle,$ar_subtitle,$en_description,$ar_description,$icon)
    {
    	$service=Service::find($id);
    	$service->en_title=$en_title;
    	$service->ar_title=$ar_title;
    	$service->en_subtitle=$en_subtitle;
        $service->ar_subtitle=$ar_subtitle;
    	$service->en_description=$en_description;
    	$service->ar_description=$ar_description;
    	// $service->parent_id=$parent_id;
        $service->icon=$icon;
    	$service->save();
    	return $service;
    }

        public static function service_delete($id)
    {
    	$service=Service::find($id);
    	$service->delete();
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

    public function getTitle()
{
 $str =  Session::get('locale').'_title';
 $title=$this[$str];
 return $title;
}

   public function getDescription()
{
 $str =  Session::get('locale').'_description';
 $description=$this[$str];
 return $description;
}

}
