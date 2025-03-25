<?php
include 'config.php';  // Ensure database connection is included
require 'razorpay-php/Razorpay.php';  // Include Razorpay SDK

use Razorpay\Api\Api;

// Replace with your actual Razorpay API keys
$api_key = "rzp_test_65h6hSpKGEEjCs"; 
$api_secret = "zvYvXdgiK814FUW7jrhy0B4j";  

$api = new Api($api_key, $api_secret);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['property_id'], $_POST['amount'], $_POST['name'], $_POST['email'], $_POST['mobile'], $_POST['pan'])) {
        die(json_encode(['error' => 'Missing required parameters!']));
    }

    // Get user input
    $property_id = (int) $_POST['property_id'];
    $amount = floatval($_POST['amount']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $pan = trim($_POST['pan']);

    var options = {
      "key": "rzp_test_XXXXXXX",
      "amount": amount * 100, 
      "currency": "INR",
      "name": "DwellWell",
      "description": "Test Transaction",
      "image": "C:\xampp\htdocs\DWELLWELL\RealEstate-PHPzip\RealEstate-PHP\images\logo\logodwell.jpg",
      "order_id": response.order_id, 
      "handler": function (response) {
          console.log("Payment Successful: ", response);
          alert("Payment successful! Payment ID: " + response.razorpay_payment_id);
      },
      "prefill": {
          "name": "Test User",
          "email": "test@example.com",
          "contact": "9999999999"
      },
      "theme": {
          "color": "#3399cc"
      }
  };
  
  var rzp = new Razorpay(options);
  rzp.on('payment.failed', function (response) {
      console.error("Error: ", response.error);
      alert("Payment failed: " + response.error.description);
  });
  rzp.open();
  