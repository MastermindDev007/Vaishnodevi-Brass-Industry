<?php
  include 'includes/php/database/dbcon.php';
  // Initialize counters
  
  $totalcart = 0;

  // Fetch counts from database
  $cartResult = mysqli_query($cn, "SELECT COUNT(*) AS count FROM `cart`");

  if ($cartResult) {
    $totalcart = mysqli_fetch_assoc($cartResult)['count'];
  }
?>