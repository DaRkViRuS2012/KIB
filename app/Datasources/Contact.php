<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $fillable = [
        'type', 'data',
    ];

    public static function contact_index()
    {
    	$contacts=Contact::all();
    	return  $contacts;
    }


    public static function contact_create($type,$data)
    {
    	$contact=new Contact;
    	$contact->type=$type;
    	$contact->data=$data;
    	$contact->save();
    	return $contact;
    }

      public static function contact_update($id,$type,$data)
    {
    	$contact=Contact::find($id);
    	$contact->type=$type;
    	$contact->data=$data;
    	$contact->save();
    	return $contact;
    }

    public static function contact_delete($id)
    {
    	$contact=Contact::find($id);
    	$contact->delete();
    }
}
