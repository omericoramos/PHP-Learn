<?php

// Database'de olamayan bir issim olmalı
define("DB_NAME", "bookstore_test");

$user = "root";
$pass = "";
$host = "localhost";
$dns  = "mysql:host={$host};dbname=" . DB_NAME . ";charset=utf8" ;