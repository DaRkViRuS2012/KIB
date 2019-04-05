<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Media;
class Gallery extends Model
{
       protected $fillable = [
        'ar_title', 'en_title',
    ];


       public function media()
    {
    	return $this->hasMany('App\Media','content_id');
    }

        public static function gallery_index()
    {
    	$galleries=Gallery::with('media')->get();
    	return  $galleries;
    }


     public static function gallery_show($gallery_id)
    {
        $gallery=Gallery::where('id',$gallery_id)->with('media')->first();
        return  $gallery;
    }


        public static function gallery_create($ar_title,$en_title)
    {
    	$gallery=new Gallery;
    	$gallery->ar_title=$ar_title;
    	$gallery->en_title=$en_title;
    	$gallery->save();
    	return $gallery;
    }

      public static function gallery_update($id,$ar_title,$en_title)
    {
    	$gallery=Gallery::find($id);
    	$gallery->ar_title=$ar_title;
    	$gallery->en_title=$en_title;
    	$gallery->save();
    	return $gallery;
    }

    public static function gallery_delete($id)
    {
    	$gallery=Gallery::find($id);
    	$gallery->delete();
    }

}
