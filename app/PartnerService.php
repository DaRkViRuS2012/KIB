<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerService extends Model
{
       protected $fillable = [
        'parnter_id', 'service_id',
    ];


         public function partner()
    {
    	return $this->belongsTo('App\Partner','parnter_id');
    }
    
    public function service()
    {
    	return $this->belongsTo('App\Service',"service_id");
    }



    public static  function partner_service_create($parnter_id,$service_id)
    {
       $partner_service=new PartnerService;
       $partner_service->parnter_id=$parnter_id;
       $partner_service->service_id=$service_id;
       $partner_service->save();
        return$partner_service;
    }


        public static function partner_service_update($id,$parnter_id,$service_id)
    {
       $partner_service=PartnerService::find($id);
       $partner_service->parnter_id=$parnter_id;
       $partner_service->service_id=$service_id;
       $partner_service->save();
        return$partner_service;
    }

}
