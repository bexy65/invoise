<?php
include("components/header.php") 
?>

<div class="row border justify-content-center align-items-center">
    <div class="text-center my-4">
        <h4>Create an account</h4>
    </div>
    <form action="create-user" method="POST" class="col-12 col-md-8 col-lg-6">
        <?php set_csrf(); ?>

        <div class="mb-3">
            <label for="usernameInput" class="form-label">Username</label>
            <input name="username" type="text" class="form-control" id="usernameInput" aria-describedby="usernameHelp">
        </div>
        <div class="mb-3 row">
            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                <label for="firstnameInput" class="form-label">First Name</label>
                <input name="first_name" type="text" class="form-control" id="firstnameInput" aria-describedby="usernameHelp">
            </div>
            <div class="col-12 col-lg-6">
                <label for="lastnameInput" class="form-label">Last Name</label>
                <input name="last_name" type="text" class="form-control" id="lastnameInput" aria-describedby="usernameHelp">
            </div>
        </div>
        <div class="mb-3">
            <label for="emailInput" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="emailInput" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 row">
            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                <label for="passwordInput" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="passwordInput">
            </div>
            <div class="col-12 col-lg-6">
                <label for="confirmPasswordInput" class="form-label">Confirm Password</label>
                <input name="confirm_password" type="password" class="form-control" id="confirmPasswordInput">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-lg-6">
                <button type="submit" class="col-12 btn btn-secondary">Register</button>
            </div>
        </div>
    </form>
</div>

<?php include("components/footer.php") ?>
