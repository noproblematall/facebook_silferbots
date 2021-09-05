<?php
require __DIR__ . '/vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('SSM Web');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$jsonAuth = '{
    // -------- Your Google Auth Key -----
  }
  ';
$client->setAuthConfig(json_decode($jsonAuth, true));

// Get the API client and construct the service object.
$service = new \Google_Service_Sheets($client);

$spreadsheetId = '1X15FkiDKA0V4Rv9zHw2PND2lnMR_ezD6jVVsZc2-va0';
$range = 'Sheet1!A:EB';
$values = [
    ["a", "b", "c", "d"]
];
$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);
$params = [
    'valueInputOption' => "RAW"
];
$result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
// $range = 'Sheet1!A1:BE';
// $response = $service->spreadsheets_values->get($spreadsheetId, $range);
// $values = $response->getValues();

// if (empty($values)) {
//     print "No data found.\n";
// } else {
//     var_dump($values);
// }