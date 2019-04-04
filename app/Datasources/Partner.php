<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
     protected $fillable = [
        'title', 'image', 'url',
    ];

    public static function partner_index()
    {
    	$compamies=Partner::all();
    	return $compamies;
    }

    public static function partner_create($title,$url,$image)
    {
    	$company=new Company;
    	$company->title=$title;
    	$company->url=$url;
    	$company->image=$image;
    	$company->save();
    	return $company;
    }

    public static function partner_update($id,$title,$url,$image)
    {
    	$company=Partner::find($id);
    	$company->title=$title;
    	$company->url=$url;
    	$company->image=$image;
    	$company->save();
    	return $company;
    }

    public static function partner_delete($id)
    {
    	$company=Partner::find($id);
    	$company->delete();
    }
        public static function partner_show($id)
    {
        $company=Partner::find($id);
        return $company;
    }
}
