<?php

use models\User as User;
use models\Ftp as Ftp;

require_once 'app/start.php';

$ftp = new Ftp("chc-deaf.org.ua");
$ftp->login("chc-deaf", "moskvich408");
$ftp->push_file("/file/maxim3.jpg", "maxim3.jpg", "gif,png,jpg");
//$ftp->push_file("C:\ftp\file\maxim3.jpg", "maxim3.jpg", "gif,png,jpg"); // For Windows
$ftp->close();

