<?php

session_start();

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'breyerstore';

$db_conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);