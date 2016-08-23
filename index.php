<?php

use Rry\SignatureAuthenticator\Authenticator;

require __dir__ . '/vendor/autoload.php';

$data = [
    'per_page' => 10
];
$url = Authenticator::make('aqNTTxH0F', '0e31fb756214058c17a3a8859ca0ae4a')->getValidUrl('http://apix.lingxi360.com/v1/contact/list/', $data);

print_r(json_decode(file_get_contents($url), true));
