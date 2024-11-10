<?php
    $editMode = false;
    include 'includes/php/database/dbcon.php';
    // include 'counter.php';
    session_start();
    error_reporting(0);
    $user_id = $_SESSION['uid'];

    // Fetch name and email from the user_login table
    // $sql = "SELECT `name`, `email` FROM `user_login` WHERE id = ?";
    // $stmt = $cn->prepare($sql);
    // $stmt->bind_param("i", $user_id);
    // $stmt->execute();
    // $result = $stmt->get_result();

    // if ($result->num_rows > 0) {
    //     $row = $result->fetch_assoc();
    //     $name = htmlspecialchars($row['name']);
    //     $email = htmlspecialchars($row['email']);
    // } else {
    //     $name = "";
    //     $email = "";
    // }

    // $stmt->close();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mob = $_POST['mob'];
        $address = $_POST['address'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $zip = $_POST['zip'];
        $payment_method = $_POST['radio-group'];
    
        // Calculate the grand total with tax
        $grand_total = 0;
    
        // Query to fetch cart items
        $st = "SELECT * FROM `cart` WHERE `uid` = '".$_SESSION['uid']."' ";
        $res = mysqli_query($cn, $st) or die("Cart query failed");
    
        while ($fld = mysqli_fetch_array($res)) {
            $total = $fld["price"] * $fld["qty"];
            $grand_total += $total;
        }
    
        $tax_rate = 0.14; // 14%
        $cgst = $grand_total * $tax_rate;
        $sgst = $grand_total * $tax_rate;
        $total_with_tax = $grand_total + $cgst + $sgst;
    
        // Insert data into checkout_details table
        $st = "INSERT INTO `checkout_details` (`name`, `email`, `mob`, `address`, `country`, `state`, `city`, `zip`, `payment_method`, `total_with_tax`) VALUES ('$name', '$email', '$mob', '$address', '$country', '$state', '$city', '$zip', '$payment_method', '$total_with_tax')";
        $res = mysqli_query($cn, $st);
    
        if ($res) {
            // Delete items from cart
            $delete_cart_sql = "DELETE FROM `cart` WHERE `uid` = '".$_SESSION['uid']."'";
            mysqli_query($cn, $delete_cart_sql) or die("Failed to delete items from cart");
    
            // Set session variable to display message
            $_SESSION['order_placed'] = true;
    
            // Redirect to thankyou.php with JavaScript
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'thankyou.php';
                    }, 1000); // Redirect after 1 second
                </script>";
        } else {
            echo "Error: " . mysqli_error($cn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="includes/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css     -->
    <link rel="stylesheet" href="includes/css/checkout.css">
</head>
<body>
    
    <div id="alert-message" class="alert alert-success alert-message" role="alert">
        Order has been placed successfully!
    </div>
    <section class="main-section">
        <!-- breadcrumb section -->
        <div class="breadcrumb-section">
            <a href="cart.php">
                <span>
                    &lt; Back to Cart
                </span>
            </a>
        </div>

        <!-- heading section -->
        <div class="heading-section">
            <h1>Checkout</h1>
            <p>
                A checkout is a counter where you pay for things you are buying.
            </p>
        </div>
        
        <!-- form section -->
        <form method="post" action="checkout.php">

            <!-- 1st sub section -->
            <div class="first-sub-section">
                <div class="tp-sub-section-heading">
                    <p>1. &nbsp; Contact Information</p>
                </div>
                <div class="wave-group one">
                    <input type="text" name="name" class="input" required>
                    <span class="bar"></span>
                    <label class="label">
                        <span class="label-char" style="--index: 0">N</span>
                        <span class="label-char" style="--index: 1">a</span>
                        <span class="label-char" style="--index: 2">m</span>
                        <span class="label-char" style="--index: 3">e</span>
                    </label>
                </div>
                <div class="wave-group two">
                    <input type="email" name="email" class="input" required>
                    <span class="bar"></span>
                    <label class="label">
                        <span class="label-char" style="--index: 0">E</span>
                        <span class="label-char" style="--index: 1">m</span>
                        <span class="label-char" style="--index: 2">a</span>
                        <span class="label-char" style="--index: 3">i</span>
                        <span class="label-char" style="--index: 4">l</span>
                    </label>
                </div>
                <div class="wave-group three">
                    <input type="tel" name="mob" class="input" required>
                    <span class="bar"></span>
                    <label class="label">
                        <span class="label-char" style="--index: 0">M</span>
                        <span class="label-char" style="--index: 1">o</span>
                        <span class="label-char" style="--index: 2">b</span>
                        <span class="label-char" style="--index: 3">.</span> &nbsp;
                        <span class="label-char" style="--index: 4">N</span>
                        <span class="label-char" style="--index: 5">o</span>
                        <span class="label-char" style="--index: 6">.</span>
                    </label>
                </div>
                <div class="wave-group four">
                    <input type="text" name="address" class="input" required>
                    <span class="bar"></span>
                    <label class="label">
                        <span class="label-char" style="--index: 0">A</span>
                        <span class="label-char" style="--index: 1">d</span>
                        <span class="label-char" style="--index: 2">d</span>
                        <span class="label-char" style="--index: 3">r</span>
                        <span class="label-char" style="--index: 4">e</span>
                        <span class="label-char" style="--index: 5">s</span>
                        <span class="label-char" style="--index: 6">s</span>
                    </label>
                </div>
            </div>
            
            <!-- 2nd sub section -->
            <div class="second-sub-section">
                <div class="tp-sub-section-heading">
                    <p>
                        2. &nbsp; Delivery Information
                    </p>
                </div>
                <div class="wave-group">
                    <select name="country" id="country" class="input five" required>
                        <option value="" selected="selected">Select Country</option>
                    </select>
                    <select name="state" id="state" class="input six" required>
                        <option value="" selected="selected">Select State</option>
                    </select>
                    <select name="city" id="city" class="input seven" required>
                        <option value="" selected="selected">Select City</option>
                    </select>
                </div>
                <div class="wave-group eight">
                    <input type="number" name="zip" class="input eight" required>
                    <span class="bar"></span>
                    <label class="label">
                        <span class="label-char" style="--index: 0">P</span>
                        <span class="label-char" style="--index: 1">i</span>
                        <span class="label-char" style="--index: 2">n</span> &nbsp;
                        <span class="label-char" style="--index: 3">C</span>
                        <span class="label-char" style="--index: 4">o</span>
                        <span class="label-char" style="--index: 5">d</span>
                        <span class="label-char" style="--index: 6">e</span>
                    </label>
                </div>
            </div>

            <!-- 3rd sub section -->
            <div class="thrid-sub-section">
                <div class="tp-sub-section-heading">
                    <p>
                        3. &nbsp; Payment Method
                    </p>
                </div>
                <div class="radio-button-container">
                    <div class="radio-button">
                        <input type="radio" class="radio-button__input" id="radio1" name="radio-group" disabled>
                        <label class="radio-button__label" for="radio1">
                            <span class="radio-button__custom"></span>UPI
                        </label>
                    </div>
                    <div class="radio-button">
                        <input type="radio" class="radio-button__input" id="radio2" name="radio-group" disabled>
                        <label class="radio-button__label" for="radio2">
                            <span class="radio-button__custom"></span>Credit Card
                        </label>
                    </div>
                    <div class="radio-button">
                        <input type="radio" class="radio-button__input" id="radio3" name="radio-group" disabled>
                        <label class="radio-button__label" for="radio3">
                            <span class="radio-button__custom"></span>Debit Card
                        </label>
                    </div>
                    <div class="radio-button">
                        <input type="radio" class="radio-button__input" id="radio4" name="radio-group" value="Cash On Delivery" checked>
                        <label class="radio-button__label" for="radio4">
                            <span class="radio-button__custom"></span>Cash on Delivery
                        </label>
                    </div>
                </div>
            </div>

        

            <!-- payment card -->
            <div class="place-order-section">
                <div class="counter-items">
                    <p><?php //echo $totalcart; ?> Items</p>
                </div>
                <hr>
                <?php 
                    $grand_total = 0; // Initialize the grand total before the loop

                    // Query to fetch cart items
                    $st = "SELECT * FROM `cart` WHERE `uid` = '".$_SESSION['uid']."' ";
                    $res = mysqli_query($cn, $st) or die("Cart query failed");

                    // Loop through cart items to calculate the grand total
                    while ($fld = mysqli_fetch_array($res)) {
                        $total = $fld["price"] * $fld["qty"]; // Calculate total for each item
                        $grand_total += $total; // Accumulate the grand total
                    }
                
                    // Tax calculation (14% for both CGST and SGST)
                    $tax_rate = 0.14; // 14%
                    $cgst = $grand_total * $tax_rate; // Calculate CGST
                    $sgst = $grand_total * $tax_rate; // Calculate SGST
                    $total_with_tax = $grand_total + $cgst + $sgst; // Total including taxes
                ?>

                <!-- HTML to display the calculated totals -->
                <p class="total1">
                    <span class="span1">Total</span>
                    <span class="span2">₹ <?php echo number_format($grand_total, 2); ?></span>
                </p>
                <p class="total2">
                    <span class="span1">CGST</span>
                    <span class="span2">+ ₹ <?php echo number_format($cgst, 2); ?> (14%)</span>
                </p>
                <p class="total3">
                    <span class="span1">SGST</span>
                    <span class="span2">+ ₹ <?php echo number_format($sgst, 2); ?> (14%)</span>
                </p>
                <hr>
                <p class="total4">
                    <span class="span1">Grand Total <br> (Incl. Taxes)</span>
                    <span class="span2">₹ <?php echo number_format($total_with_tax, 2); ?></span>
                </p>
                <input type="submit" value="Place Order &#8594" name="place_order">
            </div>
        </form>
    </section>

    <!-- jquery js -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha384-AOI6OF+JjeGQkzCj3arxP+giqkfrH9xwZhP+0Ff9JcP0HgZmzGTD9VNs8L5s70QJ" crossorigin="anonymous"></script>

    <!-- bootstrap js -->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-9seCFQlbO+YEJRzmEAZdHX4DeO/zU24EYYEpFhJvM/ULoU56azR9fY7WwICSBbfD" crossorigin="anonymous"></script> -->
    <script src="includes/js/select_option.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (<?php echo isset($_SESSION['order_placed']) ? 'true' : 'false'; ?>) {
                var alertMessage = document.getElementById('alert-message');
                alertMessage.style.display = 'block';
                setTimeout(function() {
                    alertMessage.style.display = 'none';
                }, 3000); // Hide after 3 seconds
                <?php unset($_SESSION['order_placed']); ?>
            }
        });
    </script>
</body>
</html>