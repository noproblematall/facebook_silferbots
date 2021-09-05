<?php
require __DIR__ . '/vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('SSM Web');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$jsonAuth = '{
    "type": "service_account",
    "project_id": "ssm-web-version",
    "private_key_id": "7d0cdc4797c26291f8991082fa306079bf74891a",
    "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQC0LHch0RJlHBq6\nYh3mhnSlQZSfAdNyWete46huSBWH/19qXM0UAhgNS+sUN0iZH7DwrWXr5LyahfoX\nERbIbpWJVOWSqWuJe36Fxrqq8JnarozObl28VWCu6Vo9FYjucf7XQHsB6hwAGBeB\nGLWYlo9eBvNY9OI80WG+PLowU0YanKVAhX/uGc1G0PbTI1yRVPqY2RuxSmLYBMrL\np7K6HsAg9qd7RyW4KcEJ43uRw2AOpSse6RcamYtrCJRUvBlQht/IB60KLv3O/e3W\ngkr5732/RSvrxHvudGyWHz1UbPwxo7HJcTV+dhN+P2nVtUJcqm7AWA61lHI8uSLV\nmQtbAMxzAgMBAAECggEAEfixdV0OUamI/PhWdS0KK4WsFmQvPCO993wLy9xC0Yrm\ncIyLJCjFT2Y4L48IHcXsd0VEelAZg+xDMtPQivOE1Orz7zoY8OCxkRRugCh5oDdy\n8hBOJz/44dmC177zJp2WRtA2tM0uN9AvYAAf9PVnnYBh+4iJnHliH4CdLb7Qqky0\noHNOpFyYDiuKt2KRT3cvHNzImDhws+35AcFfwA6i+W9DD4g7RZH/7YMGreLk5LNm\nphoXctfx4f/hTp+EpXBInbsvUMEiq6LE/uttZ0Ij9L40H0IWYekBlN0H5LN67uCw\n1W/veDm5VynQyTRXUQd/K4/iuJVwHlXyWCecaMYc0QKBgQDsXhlr+p4wmWniJIPx\n9qMN3635/Fdy9Ds70rsu1ptOYpuBQ4zPscP3h1pJYmEAjpX8B4QTt/8TVYyBfr7R\neFSLYf9eBB+T4HJCOBcPT31ANBjXjbsPXuvNOXQ56IKW43tzQvLZV27ze7YACGTT\nqulrSsm5u5HVVqz7zgCapPxSyQKBgQDDI4Lx2q8r8Ki4YYCRpa4adlzZYAGCGuaK\nZq3gNxHBtX8KidaoWcMhDjA2kxtNnoP9VhpFahFf7F/JbVsuCeVB399N9/vG8yZB\nir4+Q0Xmpf4fwU2ybNxArJK0FyeytsXXmnmgA2wZ06dzyZa/FCyzSvwrXlYT/4oH\n2l2O47znWwKBgBCDxpzvxsu4fFhrmrh2NhBLF5nG0slaXSUh5SgxoGpKo3jVomoE\njp+l2l4UPJjQXZRdZhIGohDUwltt4qE6GhYfA7uq6BXp8bHEv3+3WxX4TeAJrA83\n35vYLtG4+B7YyBBWlicvX7YtZ5r6+yh64ZI4iH2sqFTSmIWDcDFd469ZAoGBAKQ8\n5D4Y16x83hRpg+OR9aoyCs2t3zcY2waLizaWQuytjGJbRv7kpbXRkkSspaM7kk2L\nxYq8zijU8n2++6oRDBLYkMK3wAJfrcgmNR6EUnXhKbSiZnmQ5APO+551iqUA7h0b\n19gUaUyHdn2eorDqEwFIUFtUB9DHF+6qHGpiRSDXAoGABD496iHVGxbzIDWCKM7n\nYkMTwMEb8hbvGsHdsFBIuoSfeg6eLouhFV2F1xFKCtREVD/Gg+4gDxgchwHDAeU0\nX/jpDTV4lUt2pmhLo+L+Yis/S2wV2eQz/7ssoWu9U3/SJAOqq5dyrm5JY47kXihd\nYersjFr1vC7i7UUYxzdEqLc=\n-----END PRIVATE KEY-----\n",
    "client_email": "updateagsheetwithformdata@ssm-web-version.iam.gserviceaccount.com",
    "client_id": "117706683394338757281",
    "auth_uri": "https://accounts.google.com/o/oauth2/auth",
    "token_uri": "https://oauth2.googleapis.com/token",
    "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
    "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/updateagsheetwithformdata%40ssm-web-version.iam.gserviceaccount.com"
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