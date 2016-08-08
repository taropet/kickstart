<?php

$db = new PDO("mysql:host=localhost;dbname=kickstartapp", "root", "root");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    $queryStr = "INSERT INTO users (name, password, email) VALUES ('admin', MD5('admin'), 'petr.tarovitiy@gmail.com')";
    $db->query($queryStr);
} catch (PDOException $e) {
    echo $e->getMessage();
}
        

