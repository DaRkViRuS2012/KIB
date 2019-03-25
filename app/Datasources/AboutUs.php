<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
       protected $fillable = [
        'description', 'address', 'lat','lang'
    ];

    public static function aboutus_index()
    {
    	$about_us=AboutUs::first();
    	return $about_us;
    }


        public static function aboutus_update($id,$description,$address,$lat,$lang)
    {
    	$about_us=AboutUs::find($id);
    	$about_us->description=$description
    	$about_us->address=$address;
    	$about_us->lat=$lat;
    	$about_us->lang=$lang;
    	$about_us->save();
    	return $about_us;
    }


}
