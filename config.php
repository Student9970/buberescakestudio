<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('923850425320-p6phk37g77pvdpo8e3i6u60qgbrnh9vd.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/BCS/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>