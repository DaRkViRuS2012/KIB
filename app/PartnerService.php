<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerService extends Model
{
       protected $fillable = [
        'partner_id', 'service_id', 'value',
    ];


         public function partner()
    {
    	return $this->belongsTo('App\Partner','partner_id');
    }
    
    public function service()
    {
    	return $this->belongsTo('App\Service',"service_id");
    }



    public static  function option_create($partner_id,$type,$value,$service_id)
    {
       $partner_service=new PartnerService;
       $partner_service->partner_id=$partner_id;
       $partner_service->service_id=$service_id;
       $partner_service->value=$value;
       $partner_service->save();
        return$partner_service;
    }


        public static function option_update($id,$partner_id,$type,$value,$service_id)
    {
       $partner_service=PartnerService::find($id);
       $partner_service->partner_id=$partner_id;
       $partner_service->service_id=$service_id;
       $partner_service->value=$value;
       $partner_service->save();
        return$partner_service;
    }

}
