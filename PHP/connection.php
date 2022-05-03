<?php

define('HOST', '127.0.0.1');
define('USERNAME', 'root');
define('PASSWORD', '');
define('SCHEMA', 'login');

$connection = mysqli_connect(HOST,USERNAME,PASSWORD,SCHEMA) or die ('Não foi possível conectar');