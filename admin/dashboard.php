<?php include 'includes/php/dbcon.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard || Vaishnodevi Brass Industries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="includes/css/footer.css">
    <link rel="stylesheet" href="includes/css/dashboard.css">
    <link rel="stylesheet" href="includes/css/header.css">
</head>
<body>
    <?php include 'includes/php/header.php' ?>
    <div class="dashboard">
        <h3 class="tp-title">Dashboard</h3>
        <div class="welcome shadow-lg">
            <h3 class="tp-dashboard-title-pre">
                Welcome Dev Davda 🎉
            </h3>
            <p class="tp-dashboard-title">
                An ecommerce dashboard has just that purpose. It provides your ecommerce team with a clear overview of key financial and website KPIs at any time.
            </p>
            <a href="product.php" style="text-decoration: none;">
                <button class="tp-dashboard-btn">
                    Take a Product 
                </button>
            </a>
            <img src="assets/dashboard/welcome.png">
        </div>
        <div class="calculations">
            <?php
                // Initialize counters
                $totalAdmins = 0;
                $totalCategories = 0;
                $totalSubCategories = 0;
                $totalProducts = 0;

                // Fetch counts from database
                $adminResult = mysqli_query($cn, "SELECT COUNT(*) AS count FROM `user`");
                $categoryResult = mysqli_query($cn, "SELECT COUNT(*) AS count FROM `category`");
                $subCategoryResult = mysqli_query($cn, "SELECT COUNT(*) AS count FROM `sub_category`");
                $productResult = mysqli_query($cn, "SELECT COUNT(*) AS count FROM `product`");

                if ($adminResult) {
                    $totalAdmins = mysqli_fetch_assoc($adminResult)['count'];
                }
                if ($categoryResult) {
                    $totalCategories = mysqli_fetch_assoc($categoryResult)['count'];
                }
                if ($subCategoryResult) {
                    $totalSubCategories = mysqli_fetch_assoc($subCategoryResult)['count'];
                }
                if ($productResult) {
                    $totalProducts = mysqli_fetch_assoc($productResult)['count'];
                }
            ?>
            <a href="dashboard.php" style="text-decoration: none;">
                <div class="calc shadow calc1">
                    <div class="tp-icons">
                        <img src="assets/dashboard/profile.png">
                    </div>
                    <h3 class="tp-title-pre"><?php echo $totalAdmins; ?></h3>
                    <p class="tp-title">
                        Total Admin
                    </p>
                </div>
            </a>
            <a href="category.php" style="text-decoration: none;">
                <div class="calc shadow calc2">
                    <div class="tp-icons">
                        <img src="assets/dashboard/category.png">
                    </div>
                    <h3 class="tp-title-pre"><?php echo $totalCategories; ?></h3>
                    <p class="tp-title">
                        Total Category
                    </p>
                </div>
            </a>
            <a href="sub_category.php" style="text-decoration: none;">
                <div class="calc shadow calc3">
                    <div class="tp-icons">
                        <img src="assets/dashboard/sub-category.png">
                    </div>
                    <h3 class="tp-title-pre"><?php echo $totalSubCategories; ?></h3>
                    <p class="tp-title">
                        Total Sub-Category
                    </p>
                </div>
            </a>
            <a href="product.php" style="text-decoration: none;">
                <div class="calc shadow calc4">
                    <div class="tp-icons">
                        <img src="assets/dashboard/order.png">
                    </div>
                    <h3 class="tp-title-pre"><?php echo $totalProducts; ?></h3>
                    <p class="tp-title">
                        Total Products
                    </p>
                </div>
            </a>
        </div>
        <div class="admin_form shadow-lg">
            <h3 class="tp-title-pre">Admin</h3>
            <p class="tp-title">Add Admin</p>
            <form action="insert/insert_admin.php" method="post">
                <input type="text" name="username" id="username" placeholder="Enter Username">
                <input type="email" name="email" id="email" placeholder="Enter Email">
                <input type="password" name="password" id="password" placeholder="Enter Password">
                <select name="Role" id="Role" class="i4">
                    <option value="Select Admin Role">Select Admin Role</option>
                    <option value="Admin">Admin</option>
                    <option value="Super Admin">Super Admin</option>
                </select>
                <input type="submit" class="submit" name="add_admin" value="ADD">
            </form>
        </div>
        <div class="admin_table">
            <table class="table table-hover table-borderd table-striped shadow-lg" style="border-radius: 10px;">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $st = "SELECT * FROM `user` WHERE 1";
                        $res = mysqli_query($cn, $st) or die("Not Inserted");
                        while ($fld = mysqli_fetch_array($res)) {
                    ?>
                            <tr>
                                <th scope="row"><?php echo $fld['id'] ?></th>
                                <td><?php echo $fld['username'] ?></td>
                                <td><?php echo $fld['email_id'] ?></td>
                                <td><?php echo $fld['role'] ?></td>
                                <td><a href="update_admin.php?id=<?php echo $fld['id'] ?>" class="btn btn-success">Update</a></td>
                                <td><a href="delete_admin.php?id=<?php echo $fld['id'] ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'includes/php/footer.php' ?>
    <script src="includes/js/script.js"></script>
    <script src="includes/js/script2.js"></script>
    <script src="includes/js/script3.js"></script>
    <script src="includes/js/script4.js"></script>
    <script src="includes/js/script5.js"></script>
    <script src="includes/js/script6.js"></script>
</body>
</html>
