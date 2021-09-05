<?php
require __DIR__ . '/vendor/autoload.php';

/*
 * We need to get a Google_Client object first to handle auth and api calls, etc.
 */
$client = new \Google_Client();
$client->setApplicationName('SSM Web');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$jsonAuth = '{
    Your Google Auth Key}
  ';
$client->setAuthConfig(json_decode($jsonAuth, true));

// Get the API client and construct the service object.
$service = new \Google_Service_Sheets($client);

$spreadsheetId = '1X15FkiDKA0V4Rv9zHw2PND2lnMR_ezD6jVVsZc2-va0';

$token = '------- Your token -------';
$authorization = "X-SILFER-ACCESS-TOKEN: ".$token;
$sheet_data = array();
if (isset($_POST)) {
    if (isset($_POST['user_id']) && !empty($_POST['user_id'])) {
        $userid = $_POST['user_id'];
        array_push($sheet_data, $userid);
        $flow_id = '1605916067372';
        $response = new_flow($userid, $authorization, $flow_id);

        if (isset($_POST['product_name']) && !empty($_POST['product_name'])) {
            array_push($sheet_data, $_POST['product_name']);
        }else{
            array_push($sheet_data, '');
        }

        if (isset($_POST['product_price']) && !empty($_POST['product_price'])) {
            array_push($sheet_data, $_POST['product_price']);
        }else{
            array_push($sheet_data, '');
        }
        
        
        if (isset($_POST['user_fname']) && !empty($_POST['user_fname'])) {
            array_push($sheet_data, $_POST['user_fname']);
            $customfield = '18200';
            $value = $_POST['user_fname'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['user_lname']) && !empty($_POST['user_lname'])) {
            array_push($sheet_data, $_POST['user_lname']);
            $customfield = '10412';
            $value = $_POST['user_lname'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['dni']) && !empty($_POST['dni'])) {
            array_push($sheet_data, $_POST['dni']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['birthday']) && !empty($_POST['birthday'])) {
            array_push($sheet_data, $_POST['birthday']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['user_email']) && !empty($_POST['user_email'])) {
            array_push($sheet_data, $_POST['user_email']);
            $customfield = '10558';
            $value = $_POST['user_email'];
            setcustomfield($userid, $customfield, $value, $authorization);
        }else{
            array_push($sheet_data, '');
        }
        
        if (isset($_POST['area_code']) && !empty($_POST['area_code'])) {
            array_push($sheet_data, $_POST['area_code']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['phone_numnber']) && !empty($_POST['phone_numnber'])) {
            array_push($sheet_data, $_POST['phone_numnber']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['street']) && !empty($_POST['street'])) {
            array_push($sheet_data, $_POST['street']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['number']) && !empty($_POST['number'])) {
            array_push($sheet_data, $_POST['number']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['floor']) && !empty($_POST['floor'])) {
            array_push($sheet_data, $_POST['floor']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['department']) && !empty($_POST['department'])) {
            array_push($sheet_data, $_POST['department']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['location']) && !empty($_POST['location'])) {
            array_push($sheet_data, $_POST['location']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['province']) && !empty($_POST['province'])) {
            array_push($sheet_data, $_POST['province']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['postal_code']) && !empty($_POST['postal_code'])) {
            array_push($sheet_data, $_POST['postal_code']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['payment_type']) && !empty($_POST['payment_type'])) {
            array_push($sheet_data, $_POST['payment_type']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['card_number']) && !empty($_POST['card_number'])) {
            array_push($sheet_data, $_POST['card_number']);
        }else if(isset($_POST['cbu_number']) && !empty($_POST['cbu_number'])){
            array_push($sheet_data, $_POST['cbu_number']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['finish_month']) && !empty($_POST['finish_month'])) {
            array_push($sheet_data, $_POST['finish_month']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['finish_year']) && !empty($_POST['finish_year'])) {
            array_push($sheet_data, $_POST['finish_year']);
        }else{
            array_push($sheet_data, '');
        }
        
        if (isset($_POST['fname0']) && !empty($_POST['fname0'])) {
            array_push($sheet_data, $_POST['fname0']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['lname0']) && !empty($_POST['lname0'])) {
            array_push($sheet_data, $_POST['lname0']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['dni0']) && !empty($_POST['dni0'])) {
            array_push($sheet_data, $_POST['dni0']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['birthday0']) && !empty($_POST['birthday0'])) {
            array_push($sheet_data, $_POST['birthday0']);
            $date = date_create_from_format('j/m/Y', $_POST['birthday0']);
            $value = date_format($date,"U");
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['fname1']) && !empty($_POST['fname1'])) {
            array_push($sheet_data, $_POST['fname1']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['lname1']) && !empty($_POST['lname1'])) {
            array_push($sheet_data, $_POST['lname1']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['dni1']) && !empty($_POST['dni1'])) {
            array_push($sheet_data, $_POST['dni1']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['birthday1']) && !empty($_POST['birthday1'])) {
            $date = date_create_from_format('j/m/Y', $_POST['birthday1']);
            $value = date_format($date,"U");
            array_push($sheet_data, $_POST['birthday1']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['fname2']) && !empty($_POST['fname2'])) {
            array_push($sheet_data, $_POST['fname2']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['lname2']) && !empty($_POST['lname2'])) {
            array_push($sheet_data, $_POST['lname2']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['dni2']) && !empty($_POST['dni2'])) {
            array_push($sheet_data, $_POST['dni2']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['birthday2']) && !empty($_POST['birthday2'])) {
            $date = date_create_from_format('j/m/Y', $_POST['birthday2']);
            $value = date_format($date,"U");
            array_push($sheet_data, $_POST['birthday2']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['fname3']) && !empty($_POST['fname3'])) {
            array_push($sheet_data, $_POST['fname3']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['lname3']) && !empty($_POST['lname3'])) {
            array_push($sheet_data, $_POST['lname3']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['dni3']) && !empty($_POST['dni3'])) {
            array_push($sheet_data, $_POST['dni3']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['birthday3']) && !empty($_POST['birthday3'])) {
            $date = date_create_from_format('j/m/Y', $_POST['birthday3']);
            $value = date_format($date,"U");
            array_push($sheet_data, $_POST['birthday3']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['fname4']) && !empty($_POST['fname4'])) {
            array_push($sheet_data, $_POST['fname4']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['lname4']) && !empty($_POST['lname4'])) {
            array_push($sheet_data, $_POST['lname4']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['dni4']) && !empty($_POST['dni4'])) {
            array_push($sheet_data, $_POST['dni4']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['birthday4']) && !empty($_POST['birthday4'])) {
            $date = date_create_from_format('j/m/Y', $_POST['birthday4']);
            $value = date_format($date,"U");
            array_push($sheet_data, $_POST['birthday4']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['fname5']) && !empty($_POST['fname5'])) {
            array_push($sheet_data, $_POST['fname5']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['lname5']) && !empty($_POST['lname5'])) {
            array_push($sheet_data, $_POST['lname5']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['dni5']) && !empty($_POST['dni5'])) {
            array_push($sheet_data, $_POST['dni5']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['birthday5']) && !empty($_POST['birthday5'])) {
            $date = date_create_from_format('j/m/Y', $_POST['birthday5']);
            $value = date_format($date,"U");
            array_push($sheet_data, $_POST['birthday5']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['fname6']) && !empty($_POST['fname6'])) {
            array_push($sheet_data, $_POST['fname6']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['lname6']) && !empty($_POST['lname6'])) {
            array_push($sheet_data, $_POST['lname6']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['dni6']) && !empty($_POST['dni6'])) {
            array_push($sheet_data, $_POST['dni6']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['birthday6']) && !empty($_POST['birthday6'])) {
            $date = date_create_from_format('j/m/Y', $_POST['birthday6']);
            $value = date_format($date,"U");
            array_push($sheet_data, $_POST['birthday6']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['fname7']) && !empty($_POST['fname7'])) {
            array_push($sheet_data, $_POST['fname7']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['lname7']) && !empty($_POST['lname7'])) {
            array_push($sheet_data, $_POST['lname7']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['dni7']) && !empty($_POST['dni7'])) {
            array_push($sheet_data, $_POST['dni7']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['birthday7']) && !empty($_POST['birthday7'])) {
            $date = date_create_from_format('j/m/Y', $_POST['birthday7']);
            $value = date_format($date,"U");
            array_push($sheet_data, $_POST['birthday7']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['fname8']) && !empty($_POST['fname8'])) {
            array_push($sheet_data, $_POST['fname8']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['lname8']) && !empty($_POST['lname8'])) {
            array_push($sheet_data, $_POST['lname8']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['dni8']) && !empty($_POST['dni8'])) {
            array_push($sheet_data, $_POST['dni8']);
        }else{
            array_push($sheet_data, '');
        }
        if (isset($_POST['birthday8']) && !empty($_POST['birthday8'])) {
            $date = date_create_from_format('j/m/Y', $_POST['birthday8']);
            $value = date_format($date,"U");
            array_push($sheet_data, $_POST['birthday8']);
        }else{
            array_push($sheet_data, '');
        }

        $datetime = new DateTime('America/Argentina/Buenos_Aires');
        $today = $datetime->format('d/m/Y');
        array_push($sheet_data, $today);

        $values = array();
        array_push($values, $sheet_data);
        $body = new Google_Service_Sheets_ValueRange([
            'values' => $values
        ]);
        $params = [
            'valueInputOption' => "RAW"
        ];
        $range = 'Sheet1!A:BF';
        $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
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