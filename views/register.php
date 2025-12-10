<?php
include("components/header.php") 
?>

<div class="row border justify-content-center align-items-center">
    <form class="col-12 col-md-8 col-lg-6">
        <?php set_csrf(); ?>
        <div class="mb-3">
            <label for="usernameInput" class="form-label">Username address</label>
            <input type="text" class="form-control" id="usernameInput" aria-describedby="usernameHelp">
        </div>
        <div class="mb-3">
            <label for="emailInput" class="form-label">Email address</label>
            <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="passwordInput" class="form-label">Password</label>
            <input type="password" class="form-control" id="passwordInput">
        </div>
        <div class="mb-3">
            <label for="confirmPasswordInput" class="form-label">Password</label>
            <input type="password" class="form-control" id="confirmPasswordInput">
        </div>
        <div class="row text-center">
            <div class="col-12 col-lg-6">
                <button type="submit" class="col-12 btn btn-secondary">Register</button>
            </div>
        </div>
    </form>
</div>

<?php include("components/footer.php") ?>
