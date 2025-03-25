<?php
include 'config.php';

if (isset($_GET['transaction_id'])) {
    $transaction_id = $_GET['transaction_id'];
    $sql = "UPDATE transactions SET status='completed' WHERE id='$transaction_id'";
    $con->query($sql);

    echo "Payment successful! Transaction ID: " . $transaction_id;
}
?>
