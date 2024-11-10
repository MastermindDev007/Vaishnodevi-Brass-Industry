<?php
    $editMode = false;
    include 'includes/php/database/dbcon.php';
    error_reporting(0);
    session_start();

    if (isset($_GET['action']) && $_GET['action'] == 'add') {
        $product_id = $_GET['id'];
        $st = "SELECT * FROM `product` WHERE `id` = '$product_id'";
        $res = mysqli_query($cn, $st) or die("Product query failed");
        $fld = mysqli_fetch_array($res);

        $uid = $_SESSION["uid"];
        $pid = $_GET["id"];
        $qty = isset($_POST["qty"]) ? intval($_POST["qty"]) : 1;

        // Check if the product is already in the cart
        $check_cart_query = "SELECT * FROM `cart` WHERE `uid` = '$uid' AND `pid` = '$pid'";
        $check_cart_res = mysqli_query($cn, $check_cart_query);

        if (mysqli_num_rows($check_cart_res) > 0) {
            // Product already in cart, update quantity
            $cart_item = mysqli_fetch_array($check_cart_res);
            $new_qty = $cart_item['qty'] + $qty;
            $update_query = "UPDATE `cart` SET `qty` = '$new_qty' WHERE `uid` = '$uid' AND `pid` = '$pid'";
            mysqli_query($cn, $update_query) or die("Quantity update failed");
        } else {
            // Product not in cart, insert new row
            $cart_query = "INSERT INTO `cart` (`uid`, `pid`, `image`, `name`, `price`, `qty`) VALUES ('$uid', '$pid', '".$fld['product_image']."', '".$fld['product_name']."', '".$fld['price']."', '".$qty."')";
            mysqli_query($cn, $cart_query) or die("Product insertion failed");
        }

        echo "<script>alert('Product added to cart successfully')</script>";
        echo "<script>window.location.href='cart.php'</script>";
        exit;
    }

    // Handle quantity update
    if (isset($_POST["updateQty"])) {
        $qty = intval($_POST["qty"]);
        $pid = intval($_POST["pid"]);
        $uid = $_SESSION["uid"];
        if ($qty > 0) {
            $sql = "UPDATE `cart` SET `qty` = '$qty' WHERE `pid` = '$pid' AND `uid` = '$uid'";
            $result = mysqli_query($cn, $sql);
            if ($result) {
                header("Location: cart.php");
                exit;
            } else {
                echo "<script>alert('Failed to update quantity');</script>";
            }
        }
    }

    // Handle product deletion
    if (isset($_POST["deleteProduct"])) {
        $pid = intval($_POST["pid"]);
        $uid = $_SESSION["uid"];
        $delete_query = "DELETE FROM `cart` WHERE `pid` = '$pid' AND `uid` = '$uid'";
        $delete_result = mysqli_query($cn, $delete_query);
        if ($delete_result) {
            echo "<script>alert('Product deleted from cart successfully');</script>";
            header("Location: cart.php");
            exit;
        } else {
            echo "<script>alert('Failed to delete product');</script>";
        }
    }

    if (isset($_GET["pid"])) {
        $editMode = true;
    }

    if (isset($_POST["cancel"])) {
        header("Location: cart.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- description, keywords, author and title -->
    <?php
        $st1 = "SELECT * FROM `product_page` WHERE 1";
        $res1 = mysqli_query($cn, $st1) or die("Product page query failed");
        while ($fld1 = mysqli_fetch_array($res1)) {
    ?>
    <meta name="description" content="<?php echo $fld1['product_description']; ?>">
    <meta name="keywords" content="<?php echo $fld1['product_keyword']; ?>">
    <meta name="author" content="<?php echo $fld1['product_author']; ?>">
    <title>
        <?php echo $fld1['product_title']; ?>
    </title>
    <?php
        }
    ?>

    <!-- favicon -->
    <?php
        // $st2 = "SELECT * FROM `favicon` WHERE 1";
        // $res2 = mysqli_query($cn, $st2) or die("Favicon query failed");
        // while ($fld2 = mysqli_fetch_array($res2)) {
    ?>
    <link rel="shortcut icon" href="<?php echo "../admin/assets/logo/uploads2/" . $fld2['favicon']; ?>" type="image/x-icon">
    <?php 
        // }
    ?>

    <!-- bootstrap css -->
    <!-- <link rel="stylesheet" href="includes/bootstrap-5.0.2-dist/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- footer css -->
    <link rel="stylesheet" href="includes/css/footer.css">

    <!-- header css -->
    <link rel="stylesheet" href="includes/css/header.css">

    <!-- custom css -->
    <link rel="stylesheet" href="includes/css/cart.css">
</head>
<body>

    <!-- header section -->
    <?php include 'includes/php/header_and_footer/header.php'?>

    <!-- breadcrumb-bg -->
    <div class="breadcrumb-section">
        <h1>Cart</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb_item"><a href="index.php">Home</a>&nbsp/&nbsp</li>
            <li class="breadcrumb_item active">Cart</li>
        </ol>
    </div>
    <section class="cart-section">
        <table class="table table-hover table-dark table-bordered table-head-fixed text-nowrap" style="text-align:center;">
            <thead class="cart-table-header">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody class="cart-table-body">
                <?php 
                    $grand_total = 0; // Initialize the grand total before the loop
                    $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
                    $db = mysqli_select_db($cn, "vaishnodevi") or die ("Not connected");
                    $st = "SELECT * FROM `cart` WHERE `uid` = '".$_SESSION['uid']."' ";
                    $res = mysqli_query($cn, $st) or die("Cart query failed");
                    while ($fld = mysqli_fetch_array($res)) {
                        $total = $fld["price"] * $fld["qty"]; // Calculate total for each item
                        $grand_total += $total; // Accumulate the grand total
                ?>
                <tr>
                    <td><img src="<?php echo 'admin/' . $fld['image']; ?>" width="100" height="100"></td>
                    <td><?php echo $fld['name']; ?></td>
                    <td>
                        <?php if ($editMode && $fld["pid"] == $_GET["pid"]) { ?>
                            <form method="post" action="cart.php"> <!-- Ensure form method and action are correct -->
                                <input type="number" name="qty" min="1" max="10" value="<?php echo $fld["qty"]; ?>">
                                <input type="hidden" name="pid" value="<?php echo $fld["pid"]; ?>">
                                <input type="submit" value="Update" name="updateQty" class="btn btn-success ms-2">
                                <input type="submit" value="Cancel" name="cancel" class="btn btn-dark">
                            </form>
                        <?php } else { ?>
                            <?php echo $fld["qty"]; ?>
                            <a href="cart.php?pid=<?php echo $fld["pid"]; ?>" class="btn btn-primary ms-2">Edit</a>
                        <?php } ?>
                    </td>
                    <td>&#8377;<?php echo $fld['price']; ?></td>
                    <td>&#8377;<?php echo $total; ?></td> <!-- Display the calculated total -->
                    <td>
                        <form method="post" action="cart.php">
                            <input type="hidden" name="pid" value="<?php echo $fld["pid"]; ?>">
                            <input type="submit" value="Delete" name="deleteProduct" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?');">
                        </form>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
            <tfoot class="cart-table-footer">
                <tr>
                    <th colspan="4">Grand Total</th>
                    <th colspan="1">&#8377;<?php echo $grand_total; ?></th>
                    <th colspan="1"></th>
                </tr>
            </tfoot>
        </table>
        <a href="index.php" style="text-decoration: none;">
            <button class="button1">
                Continue Shopping
            </button>
        </a>
        <a href="checkout.php" style="text-decoration: none;">
            <button class="button1">
                Proceed To Checkout
            </button>
        </a>
    </section>
    
    <!-- footer section -->
    <?php include 'includes/php/header_and_footer/footer.php'?>

    <!-- jquery js -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha384-AOI6OF+JjeGQkzCj3arxP+giqkfrH9xwZhP+0Ff9JcP0HgZmzGTD9VNs8L5s70QJ" crossorigin="anonymous"></script>

    <!-- bootstrap js -->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-9seCFQlbO+YEJRzmEAZdHX4DeO/zU24EYYEpFhJvM/ULoU56azR9fY7WwICSBbfD" crossorigin="anonymous"></script> -->

    <!-- custom js -->
    <script src="includes/js/cart.js"></script>

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
