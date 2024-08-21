<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
       <link rel="stylesheet" href="includes/css/style.css">
</head>
<body>
       <?php 
       if (isset($_GET['message'])) {
              echo "<h4>".$_GET['message']."</h4>";
       }
       ?>
       <div class="login">
              <div class="container1"></div>
              <div class="container2 shadow-lg">
                     <p class="p1">Login.</p>
                     <p class="p2">Sign in to your account to continue.</p>
                     <form action="includes/php/login_process.php" method="post">
                            <label for="email" class="lable1">Email Address</label>
                            <input type="email" name="email" id="email" class="i1" placeholder="Enter your Email">

                            <label for="password" class="lable2">Password</label>
                            <input type="password" name="pass" id="password" class="i2" placeholder="Enter your Password">

                            <input type="submit" name="login" value="Log In" class="submit">
                     </form>
              </div>
              <p class="p3">
                     &nbsp © 2024 Vaishnodevi Brass Industries. &nbsp &nbsp Crafted with Dev Davda
              </p>
              <div class="container3">
       </div>
    </div>   
</body>
</html>