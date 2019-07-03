<?php

namespace App\Http\Controllers;

use App\Notification;
use App\NotificationService;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications=Notification::notification_index();
        return view('admin.notification.index',compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notification.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title=$request['title'];
        $body=$request['body'];
         NotificationService::SendToTopic('android',$body,$title);
        $notification= Notification::notification_create($title,$body,$user_id=null);

        echo "<script>Push.Permission.GRANTED;
          Push.create(".$title.", {
    body: ".$body.",
    icon: 'http://khouryinsurance.com/main_site/img/Logo.png',
    timeout: 4000,
    onClick: function () {
        window.focus();
        this.close();
    }
});</script>";
        return redirect('/admin/notification/index');
        // return $notification;
    }



        public function deactive(Request $request)
    {
        // $title=$request['title'];
        $id=$request['id'];
         // NotificationService::SendToTopic('android',$body,$title);
        $notification= Notification::notification_deactivate($id);
return $notification
        // return $notification;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        //
    }
}
