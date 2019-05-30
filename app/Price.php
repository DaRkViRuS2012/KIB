<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
      protected $fillable = [
        'service_id','min','max','value','type',
    ];

    //   public function company()
    // {
    // 	return $this->hasMany('App\User','user_id')->where('type','company');
    // }

          public function service()
    {
        return $this->belongsTo('App\Service','service_id');
    }



     public static function price_index()
    {
    	$prices=Price::with('company','service')->get();
    	return  $prices;
    }



     public static function price_show($id)
    {
        $price=Price::where('id',$id)->with('company','service')->first();
        return  $price;
    }


        public static function price_create($service_id,$min,$max,$value,$type)
    {
    	$price=new Price;
        $price->service_id=$service_id;
        $price->min=$min;
        $price->max=$max;
        $price->value=$value;
        $price->type=$type;
    	$price->save();
    	return $price;
    }

      public static function price_update($id,$service_id,$min,$max,$value,$type)
    {
    	$price=Price::find($id);
    	$price->service_id=$service_id;
    	$price->min=$min;
    	$price->max=$max;
        $price->value=$value;
        $price->type=$type;
    	$price->save();
    	return $price;
    }


       public static function price_delete($id)
    {
    	$price=Price::find($id);
    	$price->delete();
    }
}
