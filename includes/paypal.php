<?php

require 'paypal/autoload.php';

define('URL_SITIO','http://localhost/gdlwebcamp');

$apiContext = new  \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        //Cliente ID
        'AYutuOMVxOJuCnaBbyKkVUfmY8GcNOVGj2ftdtZ_7BmkMywpJ5IUwq71ZKnhPOwkgJaV8U5me4hAsw2H',
        //Secret
        'ENI2AGqHU8-wHylSDI8IAQ8nwcpweK97CU090cRZnbh0z4xaeAYvTUlcTztXPbJtsfyF0EdlKE2uI5Td'
    )
);


