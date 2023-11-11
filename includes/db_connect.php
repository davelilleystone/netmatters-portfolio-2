<?php

include 'db_config.php';

// connect to db
try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $user_name, $password);
} catch (PDOException $ex) {
    exit(header('Location: contact_form_error.html'));
}

$sql = $conn->prepare("INSERT into contact_form (name,company,email,telephone,message)
        VALUES(:name, :company, :email, :telephone, :message)");

$sql_values = [
    ':name' => $name,
    ':company' => $company,
    ':email' => $email,
    ':telephone' => $telephone,
    ':message' => $message
];

//db insert

try {
    $sql->execute($sql_values);
    header('Location: contact_form_success.html');
} catch (PDOException $ex) {
    exit(header('Location: contact_form_error.html'));
}
