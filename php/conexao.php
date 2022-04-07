<?php
define("HOSTNAME","localhost");
define("PORT",3306);
define("USERNAME","root");
define("PASSWORD","");
define("SCHEMA","colecaoicones");

function getConnection()
{
$key="strval";
$con= new PDO("mysql:host={$key(HOSTNAME)};dbname={$key(SCHEMA)}", USERNAME, PASSWORD);
$con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $con;
}

