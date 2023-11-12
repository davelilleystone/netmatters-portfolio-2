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
    $formErrors = [];
    $formInputs = [];
    $formSubmitSuccess = true;
} catch (PDOException $ex) {
    $formSubmitError = true;
}
