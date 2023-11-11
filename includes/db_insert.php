<?php $stmt = $conn->prepare("INSERT into contact_form (name,email,message)
        VALUES(:name, :email, :message)");

$sql_values = [
    ':name' => $name,
    ':email' => $email,
    ':message' => $message
];

//db insert

try {
    $stmt->execute($sql_values);
    header('Location: contact_form_success.html');
} catch (PDOException $ex) {
    exit(header('Location: contact_form_error.html'));
}
