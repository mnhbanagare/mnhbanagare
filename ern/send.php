<?php
define("GOOGLE_API_KEY", "AAAAYMY0274:APA91bGTiMYdUzdlxR_udH2F_-Bd8w1AGVMcn5xBypizcen9fh7W4oZEjFbOBBfvO4a7S7C4CRhbGD_SW0q6kKV00z3eSsqqiuhvQ-H_GtqfyUqVk4EoK1WNdBPlH_5U-LdyqqrrYp-J");
define("GOOGLE_GCM_URL", "https://fcm.googleapis.com/fcm/send");

function send_gcm_notify($reg_id, $message) {

        $fields = array(
                'to'   => $reg_id,
                'data' => array( "message" => $message ,'title'=> 'Test Now' ,'tag' => 'Mahesh Hegde'),
        );

        $headers = array(
                'Authorization: key=' . GOOGLE_API_KEY,
                'Content-Type: application/json'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, GOOGLE_GCM_URL);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        $result = curl_exec($ch);

        if ($result === FALSE) {
                die('Problem occurred: ' . curl_error($ch));
        }

        curl_close($ch);

        var_dump($result);
 }

//mahesh
// $reg_id = "cuTB1QMdhbE:APA91bGIWRCQ66NeSsbIoZeagzCXJBJBd49LSJ-yXVc5jHO7N5b44TUUXpSp2NxpHcZoVAw_LzQNB4G9R-wRLYcNptUiMUrkeUI4gHFAmWD5gtmNCn9Hhfta229Bm9RbXQ3WTWyZ4EdF";

// // shilpa
// $reg_id = "dlpQ5_A7gdM:APA91bHfi5LbH--dXQZrkTM0GCYA2AcTzi8opH4pkt6os52bRvqKAYoIqKUAZx6IDuQZREDQ4OB1NRQAF5NUHR21C9SorDqYverDhwxLlKi_ABxqW5O6cNLUcomTuwzoXjmtClAff9MQ";

// //suranjita
// $reg_id = "dUEJEz8e1cA:APA91bHsG4h_bSbq68ZDd5XFaw7GJebJF5xPs8EMGLz8ZvIDGYGdpkRgp1F8wjYBATKEXB-w0EUIRaeIuL9k_RIxS9AuPWTu7YeS_Ou6F4Y1loEsFlfZC1dpqbQuJJP5iJINomsxgxBS";

//mahesh er
// $reg_id = "elxZGNFfjhQ:APA91bHpN1kV47pIvWChPjB09y3TQl2InQVElV3wgfXHI56RoFjBewmZTVSy-I_XIgtOIrV76DaEkudh2NEjdRGE3LtPBYlMsC0OZZfjC0oRkXKNUw4z4KfFgo9Y9TGFaMyLX03FPII_";

//mahesh er
$reg_id = "c_l6xKDUDms:APA91bFlJcj98s4M1Y18EQkppGalfKxUaOj9T3GhZMEf3Bu3LMR2zKJJpxkxs486g97-yo_Gy1ivjePy79ud3MKC7PFqnjXZnfe4OmlehRchxBt2XecZ1x_sGry2uy2o9LCuTOwrjhK4";

//$reg_id = $_REQUEST['rcd'];
$msg = "Google Cloud Messaging Testing";

send_gcm_notify($reg_id, $msg);

// $name = $_REQUEST['name'];
// $regid = $_REQUEST['rcd'];
// $msg = "New user identified with following is the details \n".$regid."\n".$name."\n".  var_export($_REQUEST,true);
// $subject = "New browser :".$_REQUEST['rcd'];
//$msg = wordwrap($msg,70);
// send email
// mail("mnhbanagare@gmail.com",$subject,$msg);

// https://static-s.aa-cdn.net/img/ios/551666302/8fa45b88650d42e23a1548c8011a5f70?v=1

// curl -X POST -H "Authorization: key=AAAAYMY0274:APA91bGTiMYdUzdlxR_udH2F_-Bd8w1AGVMcn5xBypizcen9fh7W4oZEjFbOBBfvO4a7S7C4CRhbGD_SW0q6kKV00z3eSsqqiuhvQ-H_GtqfyUqVk4EoK1WNdBPlH_5U-LdyqqrrYp-J" -H "Content-Type: application/json" -d '{
//   "notification": {
//     "title": "Portugal vs. Denmark",
//     "body": "5 to 1",
//     "icon": "firebase-logo.png",
//     "click_action": "http://localhost:8081"
//   },
//   "to": "cuTB1QMdhbE:APA91bGIWRCQ66NeSsbIoZeagzCXJBJBd49LSJ-yXVc5jHO7N5b44TUUXpSp2NxpHcZoVAw_LzQNB4G9R-wRLYcNptUiMUrkeUI4gHFAmWD5gtmNCn9Hhfta229Bm9RbXQ3WTWyZ4EdF"
// }' "https://fcm.googleapis.com/fcm/send"


?>
