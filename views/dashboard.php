<?php 
if (session_status() === PHP_SESSION_NONE) session_start();

if (!isset($_SESSION['user'])) {
    header('Location: /login');
    exit;
}
include "components/header.php"; 
?>

<div class="row justify-content-center align-items-center">

    <div class="">
        <div class="row py-2 mb-2 border-bottom">
            <div class="col-12 col-md-6 mb-2 mb-md-0">
                <button class="col-12 col-md-4 btn btn-secondary">My files</button>
            </div>
            <div class="col-12 col-md-6 text-md-end">
                <button class="col-12 col-md-4 btn btn-success">Create <span>+</span></button>
            </div>
        </div>
        <div class="col-12 py-2 text-center">
            <div class="row py-2 mb-2 border border-bottom justify-content-center align-items-center">
                <div class="col-10 row justify-content-center align-items-center">
                    <h3 class="col-2 border-end">1</h3>
                    <p class="col">My invoise title</p>
                    <p class="col">created date</p>
                </div>
                <div class="col row">
                    <div class="col-12 col-lg-6 mb-2 mb-lg-0">
                        <button class="btn btn-primary w-100">Edit</button>
                    </div>
                    <div class="col-12 col-lg-6">
                        <button class="btn btn-danger w-100">Delete</button>
                    </div>
                </div>
            </div>
            <div class="row py-2 mb-2 border border-bottom justify-content-center align-items-center">
                <div class="col-10 row justify-content-center align-items-center">
                    <h3 class="col-2 border-end">1</h3>
                    <p class="col">My invoise title</p>
                    <p class="col">created date</p>
                </div>
                <div class="col row">
                    <div class="col-12 col-lg-6 mb-2 mb-lg-0">
                        <button class="btn btn-primary w-100">Edit</button>
                    </div>
                    <div class="col-12 col-lg-6">
                        <button class="btn btn-danger w-100">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include "components/footer.php"; ?>



