<?php

include './includes/sanitize_input.php';

$formErrors = [];
$formInputs = [];
$formValid = true;
$formInputValid = 'form__input--valid';
$formInputInvalid = 'form__input--invalid';
$showError = 'form__err-message--visible';

// Check if the form has been submitted

if (isset($_POST['submit'])) {
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $message = sanitize($_POST['message']);

    // Validate the form inputs
    if (empty($name)) {
        $formErrors['name'] = 'Please enter your name';
        $formInputs['name'] = $name;
        $formValid = false;
    } else {
        $formInputs['name'] = $name;
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (empty($email)) {
            $formErrors['email'] = 'Please enter your email address';
        } else {
            $formErrors['email'] = 'Please enter a valid email address';
        }
        $formInputs['email'] = $email;
        $formValid = false;
    } else {
        $formInputs['email'] = $email;
    }

    if (empty($message || strlen($message) < 25)) {
        if (empty($message)) {
            $formErrors['message'] = 'Please enter a message';
        } else {
            $formErrors['message'] = 'Message too short - please enter at least 25 characters';
        }
        $formInputs['message'] = $message;
        $formValid = false;
    } else {
        $formInputs['message'] = $message;
    }
}
