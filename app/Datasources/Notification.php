<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    

        protected $fillable = [
        'title', 'body','user_id',
    ];


    public static function notification_create($title,$body,$user_id=null)
    {
    	$notification=new Notification;
    	$notification->title=$title;
    	$notification->body=$body;
    	$notification->user_id=$user_id;
    	$notification->save();
    	return $notification;
    }


    public static function notification_index()
    {
        $notifications=Notification::all();
        return $notifications;
    }
}
