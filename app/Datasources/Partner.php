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
    	$partners=Partner::all();
    	return $partners;
    }

    public static function partner_create($title,$url,$image)
    {
    	$partners=new Partner;
    	$partners->title=$title;
    	$partners->url=$url;
    	$partners->image=$image;
    	$partners->save();
    	return $partners;
    }

    public static function partner_update($id,$title,$url,$image)
    {
    	$partners=Partner::find($id);
    	$partners->title=$title;
    	$partners->url=$url;
    	$partners->image=$image;
    	$partners->save();
    	return $partners;
    }

    public static function partner_delete($id)
    {
    	$partners=Partner::find($id);
    	$partners->delete();
    }
        public static function partner_show($id)
    {
        $partners=Partner::find($id);
        return $partners;
    }
}
