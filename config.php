<?php
error_reporting(0);
//-----------------------------------------------------------------------------------------------
$API_KC = "1957221944:AAFO4QNVw5gJFc6W2foZK672Adrqko-a56w";#token
$adminm = 1390918103;#ایدی عددی ادمین اصلی
//-----------------------------------------------------------------------------------------------
$dbname = "jahanbots"; //  Name db
$username = "jahanbots"; // Username db
$password = 'erfandrawer1385'; // Pass username db
//-----------------------------------------------------------------------------------------------
$connect = mysqli_connect("localhost", $username, $password, $dbname);
mysqli_query($connect,"SET SESSION collation_connection = 'utf8_persian_ci'");
//-----------------------------------------------------------------------------------------------
$API_TEL = json_decode(file_get_contents('https://api.telegram.org/bot'.$API_KC.'/getme'));
$botid = $API_TEL->result->id;
$bottag = $API_TEL->result->username;
//-----------------------------------------------------------------------------------------------
