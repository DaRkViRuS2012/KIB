<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
      protected $fillable = [
        'en_name', 'ar_name', 'location_id',
    ];

    public function location()
    {
    	return $this->belongsTo('App\Location','location_id');
    }

    public static function bank_index()
    {
    	$banks=Bank::with('location')->get();
    	return $banks;
    }

    public static function bank_create($en_name,$ar_name,$location_id)
    {
    	$bank=new Bank;
    	$bank->en_name=$en_name;
    	$bank->ar_name=$ar_name;
    	$bank->location_id=$location_id;
    	$bank->save();
    	return $bank;
    }

    public static function bank_update($id,$en_name,$ar_name,$location_id)
    {
    	$bank=Bank::find($id);
    	$bank->en_name=$en_name;
    	$bank->ar_name=$ar_name;
    	$bank->location_id=$location_id;
    	$bank->save();
    	return $bank;
    }

    public static function bank_delete($id)
    {
    	$bank=Bank::find($id);
    	$bank->delete();
    }
}
