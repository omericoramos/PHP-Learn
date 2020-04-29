<?php

require_once "../include/config.php";

try {
    $conn = new PDO("mysql:host={$host};charset=utf8", $user, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("CREATE DATABASE " . DB_NAME);
} catch (PDOException $e) {
    if ($e->getCode() === "HY000") {
        echo "<div style='border: 1px solid black; padding: 10px; max-width: 800px; margin: 50px auto;'>";
        echo "<strong style='color:red'>" . DB_NAME . "</strong> isiminde bir database var! Lütfen <strong style='color:blue'>/config.php</strong>'den DB_NAME'i değiştirin. Ya da database'deki " . DB_NAME . "'i sildikten sonra tekrar deneyin... Silmek için  <a href='dropdb.php'>tıklayın</a>";
        echo "</div>";
    } else {
        echo $e->getMessage();
    }

    exit;
}

try {
    $conn = new PDO($dns, $user, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = file_get_contents("content.sql");
    
    $conn->exec($sql);

    echo DB_NAME . " adlı veritabanı oluşturuldu ve içerikler eklendi. Ana sayfaya gitmek için için  <a href='../index.php'>tıklayın</a>";

} catch (PDOException $e) {
    echo $e->getMessage();
}
