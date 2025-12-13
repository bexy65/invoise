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
                <button id="createBtn" class="col-12 col-md-4 btn btn-success">Create <span>+</span></button>
            </div>
        </div>
        <div id="invoiceTable" class="col-12 py-2 text-center">
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

        <div id="invoiceEngine" style="display:none;">
        <!-- draggable invoice canvas -->
            <h1>My invoice</h1>
            <div id="invoice-canvas">
                <div class="draggable resizable" style="position:absolute; top:20px; left:20px;">Invoice Title</div>
                <div class="draggable resizable" style="position:absolute; top:100px; left:20px;">Customer Name</div>
                <div class="draggable resizable" style="position:absolute; top:150px; left:20px;">Item Table</div>
            </div>

            <button id="edit-btn">Edit</button>
            <button id="save-btn">Save</button>

            <style>
                #invoice-canvas { position: relative; width: 800px; height: 1100px; border: 1px solid #ccc; }
                .draggable { cursor: move; padding: 5px; background: #f8f8f8; border: 1px solid #aaa; }
            </style>


        </div>
    </div>

</div>

<?php include "components/footer.php"; ?>



