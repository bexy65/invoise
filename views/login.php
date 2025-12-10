<?php
include("components/header.php") 
?>

<div class="row border justify-content-center align-items-center">
    <form action="/user" method="POST" class="col-12 col-md-8 col-lg-6">
        <?php set_csrf(); ?>

        <?php if (!empty($_GET['error'])): ?>
        <div class="mb-3">
            <div class="alert alert-danger">
                Incorrect credentials
            </div>
        </div>
        <?php endif; ?>

        <?php if (!empty($_GET['success'])): ?>
        <div class="mb-3">
            <div class="alert alert-success">
                Logged in!
            </div>
        </div>
        <?php endif; ?>

        <div class="mb-3">
            <label for="emailInput" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="emailInput" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="passwordInput" class="form-label">Password</label>
            <input type="password" name="password"  class="form-control" id="passwordInput">
        </div>
        <div class="row text-center">
            <div class="col-12 col-lg-6 mb-2 mb-lg-0">
                <button type="submit" class="col-12 btn btn-primary">Login</button>
            </div>
            <div class="col-12 col-lg-6">
                <a href="/register" class="col-12 btn btn-secondary">Register</a>
            </div>
        </div>
    </form>
</div>

<?php include("components/footer.php") ?>
