<?php
define("HOSTNAME","localhost");
define("PORT",3306);
define("USERNAME","root");
define("PASSWORD","");
define("SCHEMA","colecaoicones");

function getConnection()
{
$link = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,SCHEMA,PORT);
mysqli_set_charset($link,"utf8");
mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_STRICT ^ MYSQLI_REPORT_INDEX);
return $link;
}

