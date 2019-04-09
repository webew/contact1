<?php
$key_secret = '6LdtKJUUAAAAAOGK8V4vvvlE3JL05uOsD3dR_DHg';
$g_response = $_POST['recaptcha_response'];
$url = 'https://www.google.com/recaptcha/api/siteverify';
$verifyResponse = file_get_contents($url.'?secret='.$key_secret.'&response='.$g_response);

if (isset($_POST['submit'])){
    $response_final = json_decode($verifyResponse);
}
if(!isset($response_final->success)){
    return false;
}
return $response_final->success;