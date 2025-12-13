<?php
$config = require __DIR__ . "/../../config/app.php";
include __DIR__ . "/../../auth.php";
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['page_title']; ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="styles.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js" integrity="sha256-9zljDKpE/mQxmaR4V2cGVaQ7arF3CcXxarvgr7Sj8Uc=" crossorigin="anonymous"></script>

    <?php if(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == '/dashboard'): ?>
      <!-- Local script file -->
      <script src="script.js" defer></script>
    <?php endif ?>
    

</head>
<body>
  <div class="">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= isset($_SESSION['user']) ? '/dashboard' : '/' ?>">Invoise</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <?php if(!isLoggedIn()): ?>

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Join Us</a>
              </li>

            <?php endif ?>

            <?php if(isLoggedIn()): ?>

              <li class="nav-item">
                <a class="nav-link" href="/account-settings"><?php echo $_SESSION['user']['first_name'] ?></a>
              </li>
              <li class="nav-item">
                <form action="/logout" method="POST" style="display:inline;">
                  <button type="submit" class="btn btn-link nav-link">Logout</button>
                </form>
              </li>

            <?php endif ?>
            
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="container min-vh-100 py-4">

