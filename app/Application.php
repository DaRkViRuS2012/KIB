<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
           protected $fillable = [
       'service_id','user_id','date','code'

       //options in application_option
    ];

    public function service()
    {
    	return $this->BelongsTo('App\Service','service_id');
    }

    public function user()
    {
    	return $this->BelongsTo('App\User','user_id');
    }

    public function options()
    {
    	   return $this->belongsToMany('App\Option','applications_options')->as('app_option')->withpivot('value')->withTimestamps();
    }

    public static function application_index()
    {
    	$applications=Application::with('service','user')->get();
    	return $applications;
    }
    public static function  application_create($service_id,$user_id,$date,$code)
    {
    	$application=new Application;
    	$application->service_id=$service_id;
    	$application->user_id=$user_id;
    	$application->date=$date;
    	$application->code=$code;
    	$application->save();
    	return $application;
    }

        public static function application_update($id,$service_id,$user_id,$date,$code)
    {
    	$application=Application::find($id);
    	$application->service_id=$service_id;
    	$application->user_id=$user_id;
    	$application->date=$date;
    	$application->code=$code;
    	$application->save();
    	return $application;
    }


         public static function application_delete($id)
    {
    	$application=Application::find($id);
    	$application->delete();
    }


}
