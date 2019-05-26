<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portal extends Model
{
    
       protected $fillable = [
        'company_id','portal',
    ];

      public function company()
    {
    	return $this->hasMany('App\User','user_id')->where('type','company');
    }


     public static function portal_index()
    {
    	$portals=Portal::with('company')->get();
    	return  $portals;
    }

         public static function portal_show($id)
    {
    	$portals=Portal::where('id',$id)->with('company')->first();
    	return  $portals;
    }


        public static function portal_create($company_id,$portal)
    {
    	$portal=new Portal;
    	$portal->company_id=$company_id;
    	$portal->portal=$portal;
    	$portal->save();
    	return $portal;
    }

      public static function portal_update($id,$company_id,$portal)
    {
    	$portal=Portal::find($id);
    	$portal->company_id=$company_id;
    	$portal->portal=$portal;
    	$portal->save();
    	return $portal;
    }


       public static function portal_delete($id)
    {
    	$portal=Portal::find($id);
    	$portal->delete();
    }
}
