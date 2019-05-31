<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
       protected $fillable = [
       'title','type','value','service_id'

    ];

    public function service()
    {
    	return $this->belongsTo('App\Service','service_id');
    }

      public function application()
    {
    	return $this->belongsToMany('App\Application','application_options')->as('applications')->withPivot('option_value')->withTimestamps();
    }


    public static function option_index()
    {
    	$options=Option::with('service')->get();
    	return $options;
    }

     public static function get_by_service($id)
    {
        $options=Option::where('service_id',$id)->get();
        return $options;
    }



    public static  function option_create($title,$type,$value,$service_id,$attr)
    {
    	$option=new Option;
    	$option->title=$title;
    	$option->type=$type;
    	$option->value=$value;
    	$option->service_id=$service_id;
        $option->attr=$attr;
    	$option->save();
    	return $option;
    }


        public static function option_update($id,$title,$type,$value,$service_id,$attr)
    {
    	$option=Option::find($id);
    	$option->title=$title;
    	$option->type=$type;
    	$option->value=$value;
    	$option->service_id=$service_id;
        $option->attr=$attr;
    	$option->save();
    	return $option;
    }

      public static function option_show($id)
    {
    $option=Option::where('id',$id)->with('service')->first();
    	return $option;
    }

    public static function option_delete($id)
    {
    	$option=Option::find($id);
    	$option->delete();
    }



}
