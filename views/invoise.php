<?php 
if (session_status() === PHP_SESSION_NONE) session_start();

$config = require __DIR__ . "/../config/app.php";
$workRecords = $config['employee_work_records'];
$companyInformation = $config['company_information'];
$workFields = $config['field_types']['work'];
$currency = $config['currency'] ?? '$';
$total = 0;


if (!isset($_SESSION['user'])) {
    header('Location: /login');
    exit;
}
include "components/header.php"; 
?>


<div class="container my-4">
    <div class="row">
        <div class="col border">
            <button>Edit</button>
            <button>Save</button>
        </div>
        <div class="col-2 border text-center">
            <select name="employees" id="employeeSelect" class="w-100">
               
            </select>
        </div>
    </div>
</div>

<div class="container border">
    <div class="my-4">
        <h3 class="title text-center">Simple Invoice</h3>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <!-- TODO: Get from database -->
            <strong>Invoice #:</strong> 12345<br>
            <strong>Date:</strong> <?php echo date("d/m/y"); ?>
        </div>
        <div class="col-6 text-right">
            <strong><?php echo $companyInformation['name']?></strong><br>
            <p><?php echo $companyInformation['address'] ?></p>
        </div>
    </div>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <?php foreach ($workFields as $fieldKey => $label): ?>
                    <th class="bg-dark text-white">
                        <?php echo $label; ?>
                    </th>
                <?php endforeach; ?>
                <th class="text-right bg-dark text-white">Total</th>
            </tr>
        </thead>
        <tbody id="test">

        </tbody>

        <tfoot>
            
        </tfoot>
    </table>

</div>

<?php include "components/footer.php"; ?>
