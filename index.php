<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <?php
    session_start();
    if(isset($_COOKIE["username"]) && isset($_COOKIE["password"])){ 
        if($_COOKIE["username"] == 'admin' && $_COOKIE["password"] == 'dreams%admin%login'){
            $_SESSION['log']='admin';
            header('Location: admin/index.php');                                 //for directing to admin without login
        }
        else if($_COOKIE["username"] == 'waiter' && $_COOKIE["password"] == 'dreams_waiter_login'){
            $_SESSION['log']='waiter';
             header('Location: waiter/index.php');                                //for directing to waiter without login
        }else if($_COOKIE["username"] == 'kitchen' && $_COOKIE["password"] == 'dreams_kitchen_login'){
            $_SESSION['log']='kitchen';
             header('Location: kitchen/kitchen.php');                                //for directing to kitchen without login
        }
    }
    ?>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <form action="login.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <img class="logo" style="height:120px; width:320px;" src="assets/images/logo.png" alt="logo">
                            <hr>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="text-primary input-group-text"><i class="fa fa-user"></i></span></div>
                                      <input class="form-control" type="text" required="" placeholder="Username" name="username" id="username">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="text-primary input-group-text"><i class="fa fa-lock"></i></span></div>
                                      <input class="form-control" type="password" required="" placeholder="Password" name="password" id="password">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <input type="checkbox" onclick="Show_password()">&nbsp;
                            <span style="font-size:12px;">Show Password</span>
                           
                            <div class="form-group">
                                <input type="checkbox" id="remember" name="remember">&nbsp; <span style="font-size:12px;">Remember me</span></input>
                            </div>
                            <div class="form-group"><button class="btn btn-primary btn-lg text-white"  type="submit" id="addarts" name="addarts" style="width: 100%;" type="button">Log in</button></div>
                        </form>
       
                </div>
            </div>

    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/js/index.js"></script>
</body>
 
</html>