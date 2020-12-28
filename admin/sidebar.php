<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <style>
            
/* The switch - the box around the slider */
.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
  }
  
  /* Hide default HTML checkbox */
  .switch input {
    opacity: 0;
    width: 0;
    height: 0;
  }
  
  /* The slider */
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  input:checked + .slider {
    background-color: green;
  }
  
  input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
  }
  
  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }
  
  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }
  
  .slider.round:before {
    border-radius: 50%;
  }
</style>
</head>
<body>
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
                    <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item dropdown nav-user">

                    </li>
                    <li class="nav-item dropdown nav-user">
                                <a class="dropdown-item" href="#"><h5 class="mb-0 text-black nav-user-name"><i class="fas fa-user mr-2"> &nbsp;&nbsp; &nbsp;Admin Console </i></h5></a>
                                <a class="dropdown-item" href="../logout.php"><h5 class="mb-0 text-black nav-user-name"><i class="fas fa-power-off mr-2">&nbsp;&nbsp; &nbsp;Logout</i></h5></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="index.php">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="index.php" ><i class="fa fa-fw fa-user-circle"></i>Dashboard 
                               </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="viewmenu.php" ><i class="fas fa-glass-martini"></i>View Menu 
                               </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="table.php" ><i class="fa fa-table"></i>Table 
                               </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="editmenu.php" ><i class="far fa-edit"></i>Edit Menu 
                               </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="special.php" ><i class=" fas fa-birthday-cake"></i>Add Today's Special 
                               </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="incexpui.php" ><i class=" fa fa-inbox" aria-hidden="true"></i>Income/Expenditures                              </a>
                            </li>
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Dream's Cafe Admin Dashboard  </h2>
                                <p class="pageheader-text">Add Items, View Menu, View Logs And Other Things.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Admin Dashboard </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->