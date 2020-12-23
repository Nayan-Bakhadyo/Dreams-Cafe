<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../documentation/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Waiter Console</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" style="color:#000;" href="#">DREAMS CAFE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="../assets/images/avatar-1.png" style="margin-right:10px;" alt="" class="user-avatar-md rounded-circle"></a>
                </button>
                 <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top" >
                    <li class="nav-item dropdown nav-user" >
                                <a class="dropdown-item" href="#"><h5 class="mb-0 text-black nav-user-name"><i class="fas fa-user mr-2"> &nbsp; &nbsp;Waiter Console </i></h5></a>
                                <a class="dropdown-item" href="../logout.php"><h5 class="mb-0 text-black nav-user-name"><i class="fas fa-power-off mr-2">&nbsp;&nbsp; &nbsp;Logout</i></h5></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
<?php
        session_start();

if( $_SESSION["log"]!='waiter'){
     header('Location: ../index.php');
}
?>

        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->