<?php

require_once "../include/config.php";

try {
    $conn = new PDO("mysql:host={$host};charset=utf8", $user, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("DROP DATABASE " . DB_NAME);

    echo DB_NAME . " adlı veritabanı silindi. Yeniden oluşturmak için  <a href='index.php'>tıklayın</a>";

} catch (PDOException $e) {
    echo $e->getMessage();
}