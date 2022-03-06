<?php

//start session on web page
session_start();

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('294559482475-0vcmba3k1qnhonga6f184226969lfsae.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Web/PHP%20Project/Login%20Using%20Gmail/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 