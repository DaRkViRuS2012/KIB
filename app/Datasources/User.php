<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','birthdate','fcmtoken','os','role','location_id',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public static function user_create($name,$username,$email,$password,$birthdate,$fcmtoken,$os,$location_id,$code)
    {
        $user=new user;
        $user->name=$name;
        $user->username=$username;
        $user->email=$email;
        $user->active='1'
        $user->password=$password
        $user->birthdate=$birthdate;
        $user->fcmtoken=$fcmtoken;
        $user->os=$os;
        $user->role=$role;
        $user->location_id=$location_id;
        $user->save();
        return $user;
    }

       public static function user_update($id,$name,$username,$email,$password,$birthdate,$fcmtoken,$os,$location_id,$code)
    {
        $user=User::find($id);
        $user->name=$name;
        $user->username=$username;
        $user->email=$email;
        $user->active='1'
        $user->password=$password
        $user->birthdate=$birthdate;
        $user->fcmtoken=$fcmtoken;
        $user->os=$os;
        $user->role=$role;
        $user->location_id=$location_id;
        $user->save();
        return $user;
    }



        public static function user_delete($id)
    {
        $user=User::find($id);
        $user->delete();
    }
}
