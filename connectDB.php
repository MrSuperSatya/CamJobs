<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=camjobs", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Cannot connect to database: ' . $e->getMessage());
}

?>