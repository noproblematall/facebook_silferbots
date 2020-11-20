<?php
// $token = '.X_VHq2Y13Ufrh0NvUq1-7kjbxxpiFgAE9L2SPWGgeCU3gCv';
$token = '';
$authorization = "X-SILFER-ACCESS-TOKEN: ".$token;

$flow_id = '1597855989878';
if (isset($_POST['user_id']) && !empty($_POST['user_id'])) {
    $userid = $_POST['user_id'];
    $response = new_flow($userid, $authorization, $flow_id);
    
    if (isset($_POST['short_name']) && !empty($_POST['short_name'])) {
        $customfield = '10087';
        $value = $_POST['short_name'];
        setcustomfield($userid, $customfield, $value, $authorization);
    
        switch ($value) {
            case "plan5_indi":
                $long_name = 'Plan 5 B Individual';
                $price = '701';
            break;
            case "plan6_indi":
                $long_name = 'Plan 6 B Individual';
                $price = '825';
            break;
            case "plan100_indi":
                $long_name = 'Plan 100 B Individual';
                $price = '1385';
            break;
            case "plan5_matr":
                $long_name = 'Plan 5 B Matrimonial';
                $price = '1279';
            break;
            case "plan6_matr":
                $long_name = 'Plan 6 B Matrimonial';
                $price = '1504';
            break;
            case "plan100_matr":
                $long_name = 'Plan 100 B Matrimonial';
                $price = '2521';
            break;
            case "plan5_fami":
                $long_name = 'Plan 5 B Familiar';
                $price = '1900';
            break;
            case "plan6_fami":
                $long_name = 'Plan 6 B Familiar';
                $price = '2234';
            break;
            case "plan100_fami":
                $long_name = 'Plan 100 B Familiar';
                $price = '3746';
            break;
            default:
            //   header("Location: /");
        }
        if ($long_name !== '') {
            $customfield = '10011';
            setcustomfield($userid, $customfield, $long_name, $authorization);
        }
        if ($price !== '') {
            $customfield = '10974';
            setcustomfield($userid, $customfield, $price, $authorization);
        }
    }
    
}

echo 'ok';

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

function setcustomfield($userid, $customfield, $value, $authorization)
{
    $ch            = curl_init();
    $datos ='value='.$value;
    
    $headers[] = "Content-Type: application/x-www-form-urlencoded";
    $headers[] = $authorization;
    $url = 'https://api.silferbots.co/user/'.$userid.'/custom_fields/'.$customfield;
    
    curl_setopt_array($ch, array(
            CURLOPT_URL           => $url,
            CURLOPT_HTTPHEADER     => $headers
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datos);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
       
    
    $response = json_decode(curl_exec($ch), true);
    curl_close($ch);

    //handle response or return something (if you need)
}