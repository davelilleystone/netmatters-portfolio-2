<?php

include 'db_config.php';

// connect to db
try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $user_name, $password);
} catch (PDOException $ex) {
    $formSubmitError = true;
}
