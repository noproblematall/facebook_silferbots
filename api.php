<?php

// $token = '.X_VHq2Y13Ufrh0NvUq1-7kjbxxpiFgAE9L2SPWGgeCU3gCv';
$token = '';
$authorization = "X-SILFER-ACCESS-TOKEN: ".$token;


if (isset($_POST)) {
    if (isset($_POST['user_id']) && !empty($_POST['user_id'])) {

        $userid = $_POST['user_id'];
        $flow_id = '1597610052843';
        $response = new_flow($userid, $authorization, $flow_id);

        // if (isset($_POST['product_name']) && !empty($_POST['product_name'])) {
        //     $customfield = '10011';
        //     $value = $_POST['product_name'];
        //     setcustomfield($userid, $customfield, $value, $authorization);
        // }
        // if (isset($_POST['price']) && !empty($_POST['price'])) {
        //     $customfield = '10974';
        //     $value = $_POST['price'];
        //     setcustomfield($userid, $customfield, $value, $authorization);
        // }
        if (isset($_POST['user_fname']) && !empty($_POST['user_fname'])) {
            $customfield = '10612';
            $value = $_POST['user_fname'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['user_lname']) && !empty($_POST['user_lname'])) {
            $customfield = '10697';
            $value = $_POST['user_lname'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['dni']) && !empty($_POST['dni'])) {
            $customfield = '10410';
            $value = $_POST['dni'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['birthday']) && !empty($_POST['birthday'])) {
            $customfield = '10611';
            $date = date_create_from_format('j/m/Y', $_POST['birthday']);
            $value = date_format($date,"U");
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['user_email']) && !empty($_POST['user_email'])) {
            $customfield = '10501';
            $value = $_POST['user_email'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['area_code']) && !empty($_POST['area_code'])) {
            $customfield = '10640';
            $value = $_POST['area_code'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['phone_numnber']) && !empty($_POST['phone_numnber'])) {
            $customfield = '10416';
            $value = $_POST['phone_numnber'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['street']) && !empty($_POST['street'])) {
            $customfield = '10997';
            $value = $_POST['street'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['number']) && !empty($_POST['number'])) {
            $customfield = '10767';
            $value = $_POST['number'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['floor']) && !empty($_POST['floor'])) {
            $customfield = '10923';
            $value = $_POST['floor'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['department']) && !empty($_POST['department'])) {
            $customfield = '10134';
            $value = $_POST['department'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['location']) && !empty($_POST['location'])) {
            $customfield = '10705';
            $value = $_POST['location'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['province']) && !empty($_POST['province'])) {
            $customfield = '10331';
            $value = $_POST['province'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['postal_code']) && !empty($_POST['postal_code'])) {
            $customfield = '10580';
            $value = $_POST['postal_code'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['fname0']) && !empty($_POST['fname0'])) {
            $customfield = '10703';
            $value = $_POST['fname0'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['lname0']) && !empty($_POST['lname0'])) {
            $customfield = '10361';
            $value = $_POST['lname0'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['dni0']) && !empty($_POST['dni0'])) {
            $customfield = '16148';
            $value = $_POST['dni0'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['birthday0']) && !empty($_POST['birthday0'])) {
            $customfield = '10812';
            $date = date_create_from_format('j/m/Y', $_POST['birthday0']);
            $value = date_format($date,"U");
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['fname1']) && !empty($_POST['fname1'])) {
            $customfield = '10586';
            $value = $_POST['fname1'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['lname1']) && !empty($_POST['lname1'])) {
            $customfield = '10757';
            $value = $_POST['lname1'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['dni1']) && !empty($_POST['dni1'])) {
            $customfield = '10711';
            $value = $_POST['dni1'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['birthday1']) && !empty($_POST['birthday1'])) {
            $customfield = '10849';
            $date = date_create_from_format('j/m/Y', $_POST['birthday1']);
            $value = date_format($date,"U");
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['fname2']) && !empty($_POST['fname2'])) {
            $customfield = '10323';
            $value = $_POST['fname2'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['lname2']) && !empty($_POST['lname2'])) {
            $customfield = '10141';
            $value = $_POST['lname2'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['dni2']) && !empty($_POST['dni2'])) {
            $customfield = '10028';
            $value = $_POST['dni2'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['birthday2']) && !empty($_POST['birthday2'])) {
            $customfield = '10188';
            $date = date_create_from_format('j/m/Y', $_POST['birthday2']);
            $value = date_format($date,"U");
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['fname3']) && !empty($_POST['fname3'])) {
            $customfield = '10622';
            $value = $_POST['fname3'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['lname3']) && !empty($_POST['lname3'])) {
            $customfield = '10335';
            $value = $_POST['lname3'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['dni3']) && !empty($_POST['dni3'])) {
            $customfield = '10140';
            $value = $_POST['dni3'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['birthday3']) && !empty($_POST['birthday3'])) {
            $customfield = '10212';
            $date = date_create_from_format('j/m/Y', $_POST['birthday3']);
            $value = date_format($date,"U");
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['fname4']) && !empty($_POST['fname4'])) {
            $customfield = '10068';
            $value = $_POST['fname4'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['lname4']) && !empty($_POST['lname4'])) {
            $customfield = '10642';
            $value = $_POST['lname4'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['dni4']) && !empty($_POST['dni4'])) {
            $customfield = '10175';
            $value = $_POST['dni4'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['birthday4']) && !empty($_POST['birthday4'])) {
            $customfield = '10651';
            $date = date_create_from_format('j/m/Y', $_POST['birthday4']);
            $value = date_format($date,"U");
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['fname5']) && !empty($_POST['fname5'])) {
            $customfield = '10809';
            $value = $_POST['fname5'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['lname5']) && !empty($_POST['lname5'])) {
            $customfield = '10517';
            $value = $_POST['lname5'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['dni5']) && !empty($_POST['dni5'])) {
            $customfield = '10305';
            $value = $_POST['dni5'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['birthday5']) && !empty($_POST['birthday5'])) {
            $customfield = '10098';
            $date = date_create_from_format('j/m/Y', $_POST['birthday5']);
            $value = date_format($date,"U");
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['fname6']) && !empty($_POST['fname6'])) {
            $customfield = '10699';
            $value = $_POST['fname6'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['lname6']) && !empty($_POST['lname6'])) {
            $customfield = '10158';
            $value = $_POST['lname6'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['dni6']) && !empty($_POST['dni6'])) {
            $customfield = '10659';
            $value = $_POST['dni6'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['birthday6']) && !empty($_POST['birthday6'])) {
            $customfield = '10459';
            $date = date_create_from_format('j/m/Y', $_POST['birthday6']);
            $value = date_format($date,"U");
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['fname7']) && !empty($_POST['fname7'])) {
            $customfield = '10109';
            $value = $_POST['fname7'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['lname7']) && !empty($_POST['lname7'])) {
            $customfield = '10667';
            $value = $_POST['lname7'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['dni7']) && !empty($_POST['dni7'])) {
            $customfield = '13961';
            $value = $_POST['dni7'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['birthday7']) && !empty($_POST['birthday7'])) {
            $customfield = '10657';
            $date = date_create_from_format('j/m/Y', $_POST['birthday7']);
            $value = date_format($date,"U");
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['fname8']) && !empty($_POST['fname8'])) {
            $customfield = '10741';
            $value = $_POST['fname8'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['lname8']) && !empty($_POST['lname8'])) {
            $customfield = '10085';
            $value = $_POST['lname8'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['dni8']) && !empty($_POST['dni8'])) {
            $customfield = '18190';
            $value = $_POST['dni8'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['birthday8']) && !empty($_POST['birthday8'])) {
            $customfield = '10614';
            $date = date_create_from_format('j/m/Y', $_POST['birthday8']);
            $value = date_format($date,"U");
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['payment_type']) && !empty($_POST['payment_type'])) {
            $customfield = '10790';
            $value = $_POST['payment_type'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['card_number']) && !empty($_POST['card_number'])) {
            $customfield = '10466';
            $value = str_replace(' ', '', $_POST['card_number']);
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['finish_month']) && !empty($_POST['finish_month'])) {
            $customfield = '10299';
            $value = $_POST['finish_month'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['finish_year']) && !empty($_POST['finish_year'])) {
            $customfield = '10083';
            $value = $_POST['finish_year'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }
        if (isset($_POST['cbu_number']) && !empty($_POST['cbu_number'])) {
            $customfield = '10466';
            $value = $_POST['cbu_number'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }

        
        echo 'ok';
    }
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
?>