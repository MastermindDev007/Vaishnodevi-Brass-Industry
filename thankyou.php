<?php
    include 'includes/php/database/dbcon.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- custom css     -->
        <link rel="stylesheet" href="includes/css/thankyou.css">
    </head>
    <body>
        <!-- order-placed-successfully -->
        <div class="order-placed-success">
            <div class="tp-order-logo">
                <img src="assets/img/correct.png">
            </div>
            <div class="tp-order-title">
                Thank You For Your Purchase
            </div>
            <div class="tp-order-sub-title">
                We've received your order will ship in 5-7 business days.
            </div>
            <div class="tp-order-button">
                <a href="index.php">
                    <button>
                        <span>
                            Back To Home
                        </span>
                    </button>
                </a>
            </div>
        </div>

        <!-- jquery js -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha384-AOI6OF+JjeGQkzCj3arxP+giqkfrH9xwZhP+0Ff9JcP0HgZmzGTD9VNs8L5s70QJ" crossorigin="anonymous"></script>
        <!-- bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-9seCFQlbO+YEJRzmEAZdHX4DeO/zU24EYYEpFhJvM/ULoU56azR9fY7WwICSBbfD" crossorigin="anonymous"></script>
        <script src="includes/js/select_option.js"></script> 
    </body>
</html>
