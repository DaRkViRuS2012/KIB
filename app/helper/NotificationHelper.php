<?php

/**
 * Description of FCM
 *
 * @author Amal Abdulraouf
 */
class NotificationHelper {

    function __construct() {

    }

    public function send_notification_to_device($registatoin_ids, $message, $data, $os, $type) {

        $message_object = array(
            "ntf_type" => $type,
            "ntf_text" => $message,
            "ntf_body" => $data
        );
        $msg = array
      (
        'body'  => '',
        'title' => $message

      );
        $url = 'https://fcm.googleapis.com/fcm/send';
        if (strtolower($os) == "ios")
            $fields = array(
                'registration_ids' => $registatoin_ids,
                'data' => $message_object,
                'content_available' => true,
                'priority' => 'high',
                'notification' => array('sound' => 'default', 'badge' => 0, 'body' => $message)
            );
        else
            $fields = array(
                'registration_ids' => $registatoin_ids,
                'notification' => $msg
            );

        $headers = array(
            'Authorization: key=' . "AAAA3wd7fmw:APA91bGyBHfE0qq6bT5vkJu84KsTfQjk3T0vlDsVrlJQS0Yye4FfdaVSn4Dm2jwCkyLzsrGXBAHx-ogoQs9PWG5r7SqOCmTs6gh-SGvcZWNdlgKTbX-jPY15fh2P8uPUj4FufqWszBy6",
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        // Execute post
        $result = curl_exec($ch);
        $res = json_decode($result);
//var_dump($res);
        // Close connection
      //  curl_close($ch);

       if (!$res->success) {
           return 0;
       } else {
           return 1;
       }
    }

}

?>
