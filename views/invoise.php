<?php 
$config = require __DIR__ . "/../config/app.php";
$workers = $config['workers'];
$companyInformation = $config['company_information'];
$workFields = $config['field_types']['work'];
$currency = $config['currency'] ?? '$'; // fallback to $ if not set
$total = 0;

if (session_status() === PHP_SESSION_NONE) session_start();

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
    </div>
</div>

<div class="container border">
    <h3 class="title text-center">Simple Invoice</h3>

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
                <th>#</th>
                <?php foreach ($workFields as $fieldKey => $label): ?>
                    <th class="bg-dark text-white">
                        <?php echo $label; ?>
                    </th>
                <?php endforeach; ?>
                <th class="text-right bg-dark text-white">Total</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($workers as $index => $worker): ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    
                    <?php foreach ($workFields as $fieldKey => $label): ?>
                        <td>
                            <?php
                            if ($fieldKey == 'rate') {
                                echo $currency . ' ' . $worker[$fieldKey];
                            } else {
                                echo $worker[$fieldKey];
                            }
                            ?>
                        </td>
                    <?php endforeach; ?>
                    
                    <td class="text-right">
                        <?php
                        $amount = $worker['hours_of_work'] * $worker['rate'];
                        echo $currency . number_format($amount, 2);
                        $total += $amount;
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

        <tfoot>
            <tr>
                <th colspan="<?php echo count($workFields) + 1; ?>" class="text-right">Total:</th>
                <th class="text-right"><?php echo $currency . number_format($total, 2); ?></th>
            </tr>
        </tfoot>
    </table>

</div>

<?php include "components/footer.php"; ?>
