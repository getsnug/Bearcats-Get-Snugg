<?php
  if(!isset($_POST['submit']))
  { 
    echo "You need to submit the form";
    exit;
  }
  $fname = $_POST['fname'];
  $lname = $_POST['lame'];
  $items = $_POST['items'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $zip = $_POST['zip'];
  $address = $_POST['address'];
  $credit = $_POST['mv'];
  $month = $_POST['mvc'];
  $year = $_POST['mvcy'];
  $email_from = 'orders@mediocreelectronics.com';
  $email_subject = "New Order";
  $email_body = "New order from $fname, $lame. Address is $address, $zip, $city, $state, $country. Credit card number is $credit, expiration month is $month, and expiration year is $year. They are ordering $items. Email is $email\n";
  $to = "orders@mediocreelectronics.com";
  $headers = "from: email_from \r\n";
  mail($to,$email_subject,$email_body,$headers);