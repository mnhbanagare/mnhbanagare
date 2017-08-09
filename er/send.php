<?php
define("GOOGLE_API_KEY", "AAAAYMY0274:APA91bHaCW8gduEkBC6OkdHm9uaq3wGolCr9vb_71ZBW9wxiOLxdylL253Ce4ebbMUqlIHB2VELiFTN00uz63At3FCntBPhfX5FY7OyQ1KlK5kbsUi9eT-lHg3QwWGWlVz8FaFdc465K");
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

$reg_id = "cuTB1QMdhbE:APA91bGIWRCQ66NeSsbIoZeagzCXJBJBd49LSJ-yXVc5jHO7N5b44TUUXpSp2NxpHcZoVAw_LzQNB4G9R-wRLYcNptUiMUrkeUI4gHFAmWD5gtmNCn9Hhfta229Bm9RbXQ3WTWyZ4EdF";

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


https://static-s.aa-cdn.net/img/ios/551666302/8fa45b88650d42e23a1548c8011a5f70?v=1

curl -X POST -H "Authorization: key=AAAAYMY0274:APA91bGTiMYdUzdlxR_udH2F_-Bd8w1AGVMcn5xBypizcen9fh7W4oZEjFbOBBfvO4a7S7C4CRhbGD_SW0q6kKV00z3eSsqqiuhvQ-H_GtqfyUqVk4EoK1WNdBPlH_5U-LdyqqrrYp-J" -H "Content-Type: application/json" -d '{
  "notification": {
    "title": "Portugal vs. Denmark",
    "body": "5 to 1",
    "icon": "firebase-logo.png",
    "click_action": "http://localhost:8081"
  },
  "to": "cuTB1QMdhbE:APA91bGIWRCQ66NeSsbIoZeagzCXJBJBd49LSJ-yXVc5jHO7N5b44TUUXpSp2NxpHcZoVAw_LzQNB4G9R-wRLYcNptUiMUrkeUI4gHFAmWD5gtmNCn9Hhfta229Bm9RbXQ3WTWyZ4EdF"
}' "https://fcm.googleapis.com/fcm/send"