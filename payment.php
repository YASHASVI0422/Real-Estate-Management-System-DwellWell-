<?php
include 'config.php';


if (!isset($_REQUEST['pid']) || empty($_REQUEST['pid'])) {
    die("Error: Property ID is missing!");
}

$property_id = (int) $_REQUEST['pid']; 
$query = mysqli_query($con, "SELECT property.*, user.* FROM `property`, `user` WHERE property.uid = user.uid AND property.pid = '$property_id'");

if (!$query || mysqli_num_rows($query) == 0) {
    die("Error: Property not found!");
}
$property = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>

<div>
    <h2>Confirm Payment for <?= htmlspecialchars($property['title']) ?></h2>
    <p>Amount: ₹<?= number_format($property['price'], 2) ?></p>
</div>

<!-- Payment Form with Razorpay -->
<form action="paynow.php" method="POST">
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard -> Settings -> API Keys
        data-amount="<?php echo $_POST['amount'] * 100; ?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35
        data-currency="INR" // You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
        data-id="<?php echo 'OID'.rand(10,100). 'END'; ?>" // Replace with the order_id generated by you in the backend.
        data-buttontext="Pay with Razorpay"
        data-name="DwellWell"
        data-description="Real Estate"
        data-image="C:\xampp\htdocs\DWELLWELL\RealEstate-PHPzip\RealEstate-PHP\images\logo\logodwell.jpg"
        data-prefill.name="<?php echo $_POST['name']; ?>"
        data-prefill.email="<?php echo $_POST['email']; ?>"
        data-prefill.contact="<?php echo $_POST['mobile']; ?>"
        data-theme.color="#0e90e4">
    </script>

    <input type="hidden" custom="Hidden Element" name="hidden">
</form>
</body>
</html>
