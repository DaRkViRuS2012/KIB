<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
           protected $fillable = [
      'applicant_name_en','applicant_name_ar', 'service_id','user_id','date','code'

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
    	   return $this->belongsToMany('App\Option','application_options')->as('app_option')->withpivot('option_value')->withTimestamps();
    }

    public static function application_index()
    {
    	$applications=Application::with('service','user','options')->get();
    	return $applications;
    }
    public static function  application_create($applicant_name_en,$applicant_name_ar,$service_id,$user_id,$date,$code)
    {
    	$application=new Application;
        $application->applicant_name_en=$applicant_name_en;
        $application->applicant_name_ar=$applicant_name_ar;
    	$application->service_id=$service_id;
    	$application->user_id=$user_id;
    	$application->date=$date;
    	$application->code=$code;
    	$application->save();
    	return $application;
    }

        public static function application_update($applicant_name_en,$applicant_name_ar,$id,$service_id,$user_id,$date,$code)
    {
    	$application=Application::find($id);
        $application->applicant_name_en=$applicant_name_en;
        $application->applicant_name_ar=$applicant_name_ar;
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
