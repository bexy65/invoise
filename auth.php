<?php
if (session_status() === PHP_SESSION_NONE) session_start();

$user = [
    'username'   => 'username',
    'first_name' => 'John',
    'last_name'  => 'Doe',
    'email'      => 'email@email.com',
    'age'        => 21,
    'role'       => 1,
    'password'   => password_hash('1234', PASSWORD_DEFAULT)
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uri = $_SERVER['REQUEST_URI'];

    switch ($uri) {
        case '/login':
            handleLogin($user);
            break;

        case '/logout':
            handleLogout();
            break;

        case '/create-user':
            handleRegister();
            break;

        default:
            http_response_code(404);
            echo "Endpoint not found";
            exit;
    }
}

// ---------- HANDLER FUNCTIONS ----------

function handleLogin($user) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (loginUser($email, $password, $user)) {
        header('Location: /dashboard?success=1');
        exit;
    } else {
        header('Location: /login?error=1');
        exit;
    }
}

function handleLogout() {
    logoutUser();
    header('Location: /login?logout=1');
    exit;
}

function handleRegister() {
    include_once "helpers.php";
    $data = $_POST;

    $validationErrors = validateRegisterForm($data);

    $email = $_POST['email'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    
    if(!empty($validationErrors)) {
        $_SESSION['errors'] = $validationErrors;
        print_r($_SESSION['errors']);
        header('Location: /create-user');
        exit;
    }

    header('Location: /login?success=1');
    exit;
}

// ---------- AUTH FUNCTIONS ----------

function loginUser($email, $password, $user) {
    if ($email !== $user['email'] || !password_verify($password, $user['password'])) {
        return false;
    }
    $_SESSION['user'] = $user;
    return true;
}

function logoutUser() {
    $_SESSION = [];
    session_destroy();
}

function isLoggedIn() {
    return !empty($_SESSION['user']);
}
