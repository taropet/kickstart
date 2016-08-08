<?php

$db = new PDO("mysql:host=localhost;dbname=kickstartapp", "root", "root");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    $queryStr = "SELECT * FROM users";
    $query = $db->prepare($queryStr);
    $query->execute();
    while ($row = $query->fetch()) {
        echo $row['id'] . '-' . $row['name'] . '-' . $row['email'] . '-' . $row['password'];
        echo '<br>';
    }
    $query->closeCursor();
} catch (PDOException $e) {
    echo $e->getMessage();
}

