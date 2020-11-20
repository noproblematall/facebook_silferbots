<?php
// $token = '.X_VHq2Y13Ufrh0NvUq1-7kjbxxpiFgAE9L2SPWGgeCU3gCv';
$token = '';
$authorization = "X-SILFER-ACCESS-TOKEN: ".$token;

$flow_id = '1596676040911';
if (isset($_POST['user_id']) && !empty($_POST['user_id'])) {
    $userid = $_POST['user_id'];
    $response = new_flow($userid, $authorization, $flow_id);
    // print_r($response);
    echo 'ok';
}


function new_flow($userid, $authorization, $flow_id)
{
    $ch            = curl_init();
    
    $headers[] = "Content-Type: application/x-www-form-urlencoded";
    $headers[] = $authorization;
    $url = 'https://api.silferbots.co/user/'.$userid.'/send/'.$flow_id;
    
    curl_setopt_array($ch, array(
            CURLOPT_URL           => $url,
            CURLOPT_HTTPHEADER     => $headers
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $datos);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
       
    
    $response = json_decode(curl_exec($ch), true);
    curl_close($ch);
    return $response;

    //handle response or return something (if you need)
}