<?php 
$config = require __DIR__ . "/../config/app.php";

if (session_status() === PHP_SESSION_NONE) session_start();

if (!isset($_SESSION['user'])) {
    header('Location: /login');
    exit;
}
include "components/header.php"; 
?>

<div id="invoiceEngine" class="border row justify-content-center">
    <h1>My invoice</h1>
    <div class="row border">
        <div class="col-6 my-2">
            <button id="editBtn">Edit</button>
            <button id="saveBtn">Save</button>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <?php foreach($config['input_fields'] as $field => $value): ?>
                <div class="field">
                    <input type="text" placeholder="<?php echo htmlspecialchars($value) ?>">
                </div>
           <?php endforeach; ?>
        </div>

        <div id="invoice-canvas" class="col">
          
        </div>
    </div>


</div>

<?php include "components/footer.php"; ?>
