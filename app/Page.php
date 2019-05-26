<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Media;
class Page extends Model
{
	protected $fillable = [

	'en_name','en_description','ar_name','ar_description','image','link'
];
    

         public static function page_index()
    {
    	$pages=Page::with('media')->get();
    	return  $pages;
    }


           public function media()
    {
        return $this->hasMany('App\Media','content_id')->where('content_type','page');
    }


        public static function page_create($en_name,$en_description,$ar_name,$ar_description,$image,$link)
    {
    	$page=new Page;
    	$page->en_name=$en_name;
    	$page->en_description=$en_description;
    	$page->ar_name=$ar_name;
    	$page->ar_description;
    	$page->image=$image;
    	$page->link=$link;
    	$page->save();
    	return $page;
    }

      public static function page_update($id,$en_name,$en_description,$ar_name,$ar_description,$image,$link)
    {
    	$page=Page::find($id);
    	$page->en_name=$en_name;
    	$page->en_description=$en_description;
    	$page->ar_name=$ar_name;
    	$page->ar_description;
    	$page->image=$image;
    	$page->link=$link;
    	$page->save();
    	return $page;
    }


       public static function page_delete($id)
    {
    	$page=Page::find($id);
    	foreach ($page->media as $key => $media) {
    		Media::media_delete($media->id);
    	}
    	$page->delete();
    }
}
