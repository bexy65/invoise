<?php

function validateRegisterForm($data) {
    $errors = [];

    // Email
    if (!isset($data['email']) || trim($data['email']) === '') {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email";
    }

    // Password
    if (!isset($data['password']) || trim($data['password']) === '') {
        $errors['password'] = "Password is required";
    } elseif (strlen($data['password']) < 6) {
        $errors['password'] = "Password must be at least 6 characters";
    }

    // Confirm Password
    if (!isset($data['confirm_password']) || trim($data['confirm_password']) === '') {
        $errors['confirm_password'] = "Confirm password is required";
    } elseif ($data['confirm_password'] !== $data['password']) {
        $errors['confirm_password'] = "Passwords do not match";
    }

    return $errors;
}
