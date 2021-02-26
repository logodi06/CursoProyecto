<?php

require 'paypal/autoload.php';

define('URL_SITIO','http://localhost/paypal');

$apiContext = new  \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        //Cliente ID
        'AcjKCL0it6zl5DSO2sFYzRR2Lf7yyp_0ii-CKVfupqg6ZEDMXn6SJGV0HC6Uoz0Vhb9dv_wHyC5v2NJm',
        //Secret
        'ENmIULbBbF7r60A65U6y4IUSxGZ6PQFPvPGWXVeaKjDJdNJYfGPqleiI_gUFCq69XlTjA6BBat1W0Eg_'
    )
);


