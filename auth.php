<?php
$user = [
    'username' => 'John Doe',
    'email' => 'email@email.com',
    'age' => '21',
    'role' => 1,
    'password' => password_hash('1234', PASSWORD_DEFAULT)
];

if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(isValid($email, $password)){
        header('Location: /login?success=1');
        exit;
    } else {
        header('Location: /login?error=1');
        exit;
    }
}

function isValid($email, $password) {
    if($email == $user['email'] && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user'] = $user;
        return true;
    }

    return false;
}

