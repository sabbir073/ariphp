<?php
include("auth.php");
include("db.php");
$name = $_SESSION['username'];
$query = "SELECT * FROM user WHERE email = '".$name."' LIMIT 1";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
$rows = mysqli_num_rows($result);
if ($rows == 1){
    $myname =$data['name'];
    $email = $data['email'];
}
else {
    echo mysqli_error($con);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Accident Research Institute BUET</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $myname;?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Basic
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Accidents</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" id="modalToggle" role="button" style="cursor:pointer;">Add New</a>
            <a class="collapse-item" href="cards.html">View All</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>District/Thanas</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Add, Edit or View:</h6>
            <a class="collapse-item" href="utilities-color.html">Thanas</a>
            <a class="collapse-item" href="utilities-border.html">Districts</a>
            <a class="collapse-item" href="utilities-animation.html">Metro Police</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Others
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>অন্যান্য</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">তথ্য বিবরণী</h6>
            <a class="collapse-item" href="login.html">দুর্ঘটনার মাত্রা</a>
            <a class="collapse-item" href="register.html">ট্রাফিক নিয়ন্ত্রন ব্যবস্থা</a>
            <a class="collapse-item" href="forgot-password.html">সংঘর্ষের ধরণ</a>
            
            
          </div>
        </div>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

      
      <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

    
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      
      <hr class="sidebar-divider d-none d-md-block">

     
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 1, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">january 1, 2020</div>
                    A new monthly report is ready to download!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">February 1, 2020</div>
                    Account Alert: We've noticed unusually activity for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $myname;?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Accidents (This Month)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">40,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Accidents (Last Month)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">30,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">ঝুঁকিপূর্ণ থানা/মেট্রো পুলিশ</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">ঢাকা</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Accidents</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">এই বছরের দুর্ঘটনার চিত্র</h6>
                  <div class="dropdown no-arrow">

                    <!-- <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div> -->

                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">এই মাসের দুর্ঘটনার মাত্রা</h6>
                  <div class="dropdown no-arrow">
                    <!-- <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div> -->
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> F
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> G
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> S
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-customs"></i> M
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Top Accidents Thanas/Metro police</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Dhaka Metro Police <span class="float-right">1296</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Chittagong Metro Police <span class="float-right">1120</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Syleth Metro Police <span class="float-right">987</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Mymensing metro Police <span class="float-right">772</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Keraniganj Model Thana <span class="float-right">533</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              

              <!-- Color System -->
              <!-- <div class="row">
                <div class="col-lg-6 mb-4">
                  <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                      Primary
                      <div class="text-white-50 small">#4e73df</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-success text-white shadow">
                    <div class="card-body">
                      Success
                      <div class="text-white-50 small">#1cc88a</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      Info
                      <div class="text-white-50 small">#36b9cc</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                      Warning
                      <div class="text-white-50 small">#f6c23e</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                      Danger
                      <div class="text-white-50 small">#e74a3b</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Secondary
                      <div class="text-white-50 small">#858796</div>
                    </div>
                  </div>
                </div>
              </div>

            </div> -->

            <!-- <div class="col-lg-6 mb-4">

              
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                  <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
                </div>
              </div>

             
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                </div>
                <div class="card-body">
                  <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                  <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
                </div>
              </div>

            </div> -->
          </div>
          <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Top Died Thanas/Metro police</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Dhaka Metro Police <span class="float-right">1296</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Chittagong Metro Police <span class="float-right">1120</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Syleth Metro Police <span class="float-right">987</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Mymensing metro Police <span class="float-right">772</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Keraniganj Model Thana <span class="float-right">533</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Accident Research Institute BUET 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
 <!--  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div> -->


  <!-- Large modal -->
<div id="modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="wizard-title">Add New Accidents</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#primarypanel" role="tab">প্রাথমিক তথ্য বিবরণী</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#officeuse" role="tab">অফিস ডাটা</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#vehicledriver" role="tab">যানবাহন/চালক</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#passenger" role="tab">যাত্রী/পথচারী</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#finalstep" role="tab">দুর্ঘটনার সহায়ক কারণ</a>
          <li>
        </ul>
        
        <!-- 1-28 -->
        <div class="tab-content mt-2">
          <div class="tab-pane fade show active" id="primarypanel" role="tabpanel">
            <h4>প্রাথমিক তথ্য</h4>
            <div class="form-group">
              <label for="accidentnumber">1.দুর্ঘটনার ক্রমিক নাম্বার</label>
              <input type="number" class="form-control" id='accidentnumber'></input>
              <label for="primaryinformationumber">2.প্রাথমিক তথ্য বিবরণী নাম্বার</label>
              <input type="number" class="form-control" id='primaryinformationumber'></input>
              <label for="thana">3.থানা</label>
              <select class="form-control" id="thana">
                    <option selected disabled>থানা সিলেক্ট করুন</option>
                    <option>উত্তরা</option>
                    <option>মোহাম্মদপুর</option>
                    <option>আদাবর</option>
                    <option>বনশ্রী</option>
                    <option>শাহজাহানপুর</option>
               </select>
              <label for="zilla">4.জিলা/মেট্রোপলিটন পুলিশ</label>
              <select class="form-control" id="zilla">
                    <option selected disabled>জিলা/মেট্রোপলিটন পুলিশ সিলেক্ট করুন</option>
                    <option>উত্তরা</option>
                    <option>মোহাম্মদপুর</option>
                    <option>আদাবর</option>
                    <option>বনশ্রী</option>
                    <option>শাহজাহানপুর</option>
               </select>
              <label for="accidentcarnumber">5.দুর্ঘটনা কবলিত গাড়ির সংখ্যা</label>
              <input type="number" class="form-control" id='accidentcarnumber'></input>
              <label for="injureddrivernumber">6.হতাহত ড্রাইভারের সংখ্যা</label>
              <input type="number" class="form-control" id='injureddrivernumber'></input>
              <label for="injuredpassengernumber">7.হতাহত যাত্রীর সংখ্যা</label>
              <input type="number" class="form-control" id='injuredpassengernumber'></input>
              <label for="injuredpassersbynumber">8.হতাহত পথচারীর সংখ্যা</label>
              <input type="number" class="form-control" id='injuredpassersbynumber'></input>
              <label for="accidentlevel">9.দুর্ঘটনার মাত্রা</label>
              <select class="form-control" id="accidentlevel">
                    <option selected disabled>দুর্ঘটনার মাত্রা সিলেক্ট করুন</option>
                    <option>মৃত্যু ঘটিত দুর্ঘটনা</option>
                    <option>মারাত্মক ক্ষত জনিত দুর্ঘটনা</option>
                    <option>সাধারণ ক্ষত জনিত দুর্ঘটনা</option>
                    <option>মোটর সংঘর্ষ</option>
               </select>
              <label for="day">10.দিন</label>
              <div class="row container">
                    <div class="form-radio" style="margin-right:5px;">
                      <label class="form-radio-label">
                        <input type="radio" name="day" class="form-radio-input" id="sunday">
                        Sunday 
                      </label>
                    </div>
                    <div class="form-radio" style="margin-right:5px;">
                      <label class="form-radio-label">
                        <input type="radio" name="day" class="form-radio-input" id="monday">
                        Monday 
                      </label>
                    </div>
                    <div class="form-radio" style="margin-right:5px;">
                      <label class="form-radio-label">
                        <input type="radio" name="day" class="form-radio-input" id="tuesday">
                        Tuesday 
                      </label>
                    </div>
                    <div class="form-radio" style="margin-right:5px;">
                      <label class="form-radio-label">
                        <input type="radio" name="day" class="form-radio-input" id="wednesday">
                        Wednesday 
                      </label>
                    </div>
                    <div class="form-radio" style="margin-right:5px;">
                      <label class="form-radio-label">
                        <input type="radio" name="day" class="form-radio-input" id="thursday">
                        Thursday 
                      </label>
                    </div>
                    <div class="form-radio" style="margin-right:5px;">
                      <label class="form-radio-label">
                        <input type="radio" name="day" class="form-radio-input" id="friday">
                        Friday 
                      </label>
                    </div>
                    <div class="form-radio" style="margin-right:5px;">
                      <label class="form-radio-label">
                        <input type="radio" name="day" class="form-radio-input" id="saturday">
                        Saturday
                      </label>
                    </div>
              </div><br>
              <label for="accidentdate">11.12.13.দুর্ঘটনার তারিখ</label>
                      <div class="row container">
                        <input class="form-control" type="date" id="accidentdate">
                      </div>
              <label for="accidenttime">14.দুর্ঘটনার সময়</label>
                    <div class="row container">
                        <input class="form-control" type="time" id="accidenttime">
                    </div>
              <label for="reporttime">রিপোর্ট করার সময়</label>
                    <div class="row container">
                        <input class="form-control" type="time" id="reporttime">
                    </div>
              <label for="reportdate">রিপোর্ট করার তারিখ</label>
              <div class="row container">
                        <input class="form-control" type="date" id="reportdate">
                      </div>
            </div>

            <div class="form-group">
            <label for="accidentlocationtype">15. সংযোগ স্থলের ধরণ</label>
              <select class="form-control" id="accidentlocationtype">
                    <option selected disabled>সংযোগ স্থলের ধরণ সিলেক্ট করুন</option>
                    <option>সংযোগ স্থল নয়</option>
                    <option>চৌরাস্তা</option>
                    <option>তিন রাস্তার মোড়</option>
                    <option>চতুর্মুখী মোড়</option>
                    <option>বৃত্তাকার মোড়</option>
                    <option>রেলওয়ে ক্রসিং</option>
                    <option value="7">অন্যান্য</option>
               </select>
              <input id="onno1" type="text" class="form-control d-none" name="extendedoption1" placeholder="অন্যান্য লিখুন..."></input>
            </div>
            <div class="form-group">
            <label for="trafficcontrolsystem">16. ট্রাফিক নিয়ন্ত্রন ব্যবস্থা</label>
              <select class="form-control" id="trafficcontrolsystem">
                    <option selected disabled>ট্রাফিক নিয়ন্ত্রন ব্যবস্থা সিলেক্ট করুন</option>
                    <option>অনিয়ন্ত্রিত</option>
                    <option>রোড ডিভাইডার দ্বারা নিয়ন্ত্রিত</option>
                    <option>পথচারী পারাপার</option>
                    <option>পুলিশ নিয়ন্ত্রিত</option>
                    <option>ট্রাফিক বাতি নিয়ন্ত্রিত</option>
                    <option>পুলিশ ও ট্রাফিক বাতি নিয়ন্ত্রিত</option>
                    <option>থামা/যেতে দিন সংকেত দ্বারা নিয়ন্ত্রিত</option>
                    <option value="8">অন্যান্য</option>
               </select>
              <input id="onno2" type="text" class="form-control d-none" name="extendedoption2" placeholder="অন্যান্য লিখুন..."></input>
            </div>
            <div class="form-group">
            <label for="collisiontype">17. সংঘর্ষের ধরণ</label>
              <select class="form-control" id="collisiontype">
                    <option selected disabled>সংঘর্ষের ধরণ সিলেক্ট করুন</option>
                    <option>মুখোমুখি</option>
                    <option>পশ্চাদ ভাগ</option>
                    <option>সমকোণ</option>
                    <option>পার্শ্ব ঘর্ষণ</option>
                    <option>উল্টে যাওয়া</option>
                    <option>রাস্তার উপরস্থ বস্তুকে আঘাত</option>
                    <option>রাস্তার ধারের বস্তুকে আঘাত</option>
                    <option>দাঁড়ানো গাড়িকে আঘাত</option>
                    <option>পথচারীকে আঘাত</option>
                    <option>জন্তুকে আঘাত</option>
                    <option value="11">অন্যান্য</option>
               </select>
              <input id="onno3" type="text" class="form-control d-none" name="extendedoption3" placeholder="অন্যান্য লিখুন..."></input>
            </div>
            <div class="form-group">
              <label for="carmovementdirection">18. গাড়ি চলাচলের দিক</label>
                <select class="form-control" id="carmovementdirection">
                    <option selected disabled>গাড়ি চলাচলের দিক সিলেক্ট করুন</option>
                    <option>একমুখী চলাচল</option>
                    <option>উভয়মুখী চলাচল</option>
                </select>
            </div>
            <div class="form-group">
              <label for="roaddivider">19. রোড ডিভাইডার</label>
                <select class="form-control" id="roaddivider">
                    <option selected disabled>রোড ডিভাইডার সিলেক্ট করুন</option>
                    <option>আছে</option>
                    <option>নাই</option>
                </select>
            </div>

            <div class="form-group">
              <label for="weather">20. আবহাওয়া</label>
                <select class="form-control" id="weather">
                    <option selected disabled>আবহাওয়া সিলেক্ট করুন</option>
                    <option>ভালো</option>
                    <option>বৃষ্টি</option>
                    <option>ঝড়</option>
                    <option>কুয়াশা</option>
                </select>
            </div>

            <div class="form-group">
              <label for="light">21. আলো</label>
                <select class="form-control" id="light">
                    <option selected disabled>আলো সিলেক্ট করুন</option>
                    <option>দিন</option>
                    <option>ভোর/সন্ধ্যা</option>
                    <option>আলোকিত সড়ক (রাতে)</option>
                    <option>অনালোকিত সড়ক (রাতে)</option>
                </select>
            </div>

            <div class="form-group">
              <label for="roadgeometricinfo">22. রাস্তার জ্যামিতিক বিবরণ</label>
                <select class="form-control" id="roadgeometricinfo">
                    <option selected disabled>রাস্তার জ্যামিতিক বিবরণ সিলেক্ট করুন</option>
                    <option>সোজা-সমতল</option>
                    <option>বাঁকানো</option>
                    <option>অসমতল</option>
                    <option>বাঁকা-অসমতল</option>
                    <option>চূড়া</option>
                </select>
            </div>

            <div class="form-group">
            <label for="roadsurfacecondition">23.রাস্তার উপরিভাগের অবস্থা</label>
              <select class="form-control" id="roadsurfacecondition">
                    <option selected disabled>রাস্তার উপরিভাগের অবস্থা সিলেক্ট করুন</option>
                    <option>শুকনা</option>
                    <option>ভেজা</option>
                    <option>কর্দমাক্ত</option>
                    <option>প্লাবিত</option>
                    <option value="5">অন্যান্য</option>
               </select>
              <input id="onno4" type="text" class="form-control d-none" name="extendedoption4" placeholder="অন্যান্য লিখুন..."></input>
            </div>

            <div class="form-group">
              <label for="roadtype">24. রাস্তার প্রকারভেদ</label>
                <select class="form-control" id="roadtype">
                    <option selected disabled>রাস্তার প্রকারভেদ সিলেক্ট করুন</option>
                    <option>পাকা</option>
                    <option>ইটের রাস্তা</option>
                    <option>কাঁচা</option>
                </select>
            </div>

            <div class="form-group">
              <label for="roadcondition">25. রাস্তার প্রকৃতি</label>
                <select class="form-control" id="roadcondition">
                    <option selected disabled>রাস্তার প্রকৃতি সিলেক্ট করুন</option>
                    <option>ভালো</option>
                    <option>এবড়ো-থেবড়ো (রাফ)</option>
                    <option>মেরামত কাজ চলছে</option>
                </select>
            </div>

            <div class="form-group">
              <label for="roadclass">26. রাস্তার শ্রেণী</label>
                <select class="form-control" id="roadclass">
                    <option selected disabled>রাস্তার শ্রেণী সিলেক্ট করুন</option>
                    <option>ন্যাশনাল</option>
                    <option>রিজিওনাল</option>
                    <option>ফিডার রোড</option>
                    <option>রুরাল রোড</option>
                    <option>সিটি রোড</option>
                </select>
            </div>

            <div class="form-group">
              <label for="roadcharacteristic">27. রাস্তার বৈশিষ্ট্য</label>
                <select class="form-control" id="roadcharacteristic">
                    <option selected disabled>রাস্তার বৈশিষ্ট্য সিলেক্ট করুন</option>
                    <option>সাধারণ রাস্তা</option>
                    <option>সেতু</option>
                    <option>কালভার্ট</option>
                    <option>সংকীর্ণ/বাঁধাপ্রাপ্ত</option>
                    <option>স্পীড ব্রেকার</option>
                </select>
            </div>

            <div class="form-group">
              <label for="areatype">28. এলাকার ধরণ</label>
                <select class="form-control" id="areatype">
                    <option selected disabled>এলাকার ধরণ সিলেক্ট করুন</option>
                    <option>শহর</option>
                    <option>গ্রাম এলাকা</option>
                </select>
            </div>

            <button class="btn btn-secondary" id="primarycontinue">Continue</button>
          </div>

          <!-- 1-28 end -->


          <!-- 29-37 start -->
          <div class="tab-pane fade" id="officeuse" role="tabpanel">
            <h4>অফিস ডাটা</h4>

            <div class="form-group">
                        <label for="xymap">29.XY MAP</label>
                        <input type="text" class="form-control" id='xymap'></input>
            </div>

            <div class="form-group">
                        <label for="xaxis">30.X</label>
                        <input type="text" class="form-control" id='xaxis'></input>
            </div>

            <div class="form-group">
                        <label for="yaxis">31.Y</label>
                        <input type="text" class="form-control" id='yaxis'></input>
            </div>

            <div class="form-group">
                        <label for="route">32.ROUTE</label>
                        <input type="text" class="form-control" id='route'></input>
            </div>

            <div class="form-group">
                        <label for="kilometre">33.KM</label>
                        <input type="text" class="form-control" id='kilometre'></input>
            </div>

            <div class="form-group">
                        <label for="hundredmetre">34.100m</label>
                        <input type="text" class="form-control" id='hundredmetre'></input>
            </div>

            <div class="form-group">
                        <label for="nodemap">35.NODE MAP</label>
                        <input type="text" class="form-control" id='nodemap'></input>
            </div>

            <div class="form-group">
                        <label for="nodeone">36.NODE 1</label>
                        <input type="text" class="form-control" id='nodeone'></input>
            </div>

            <div class="form-group">
                        <label for="nodetwo">37.NODE 2</label>
                        <input type="text" class="form-control" id='nodetwo'></input>
            </div>
            
            <h6><b>অবস্থান</b></h6>

            <div class="form-group">
                        <label for="cityname">নগর/শহর/গ্রাম এর নাম</label>
                        <input type="text" class="form-control" id='cityname'></input>
            </div>
            <div class="form-group">
                        <label for="distance">থেকে দূরত্ব</label>
                        <input type="text" class="form-control" id='distance' placeholder="কি.মি./মি."></input>
            </div>
            
            <div class="form-group">
                        <label for="roadname">রাস্তার নাম</label>
                        <input type="text" class="form-control" id='roadname'></input> { মধ্যে } </br>

                        <label for="roadorplace">রোড/স্থান (১)</label>
                        <input type="text" class="form-control" id='roadorplace'></input>

                        <label for="distancetwo">থেকে দূরত্ব</label>
                        <input type="text" class="form-control" placeholder="কি.মি./মি." id='distancetwo'></input>
                        
                        <label for="roadorplacetwo">রোড/স্থান (২)</label>
                        <input type="text" class="form-control" id='campaignNamesub3'></input>

                        <label for="distancethree">থেকে দূরত্ব</label>
                        <input type="text" class="form-control" placeholder="কি.মি./মি." id='distancethree'></input>
            </div>
            
            <div class="form-group">
                        <label for="roadnametwo">দ্বিতীয় রাস্তার নাম</label>
                        <input type="text" class="form-control" id='roadnametwo' placeholder="শুধুমাত্র সংযোগ স্থানের দুর্ঘটনার ক্ষেত্রে"></input>

                        <label for="distancefour">থেকে দূরত্ব</label>
                        <input type="text" class="form-control" placeholder="কি.মি./মি." id='distancefour'></input>
            </div>

            <div class="form-group">
                        <label for="accidentsigns">দুর্ঘটনা স্থানের রেখা চিত্র</label>
                        <input type="file" class="form-control" id='accidentsigns'></input>
            </div>

            <div class="form-group">
                        <label for="collisionsigns">সংঘর্ষের রেখা চিত্র</label>
                        <input type="file" class="form-control" id='collisionsigns'></input>
            </div>

            <div class="form-group">
                        <label for="accidentsummary">দুর্ঘটনার সংক্ষিপ্ত বিবরণী</label>
                        <br>
                        <textarea name="দুর্ঘটনার সংক্ষিপ্ত বিবরণী" id="accidentsummary" class="form-control" cols="80" rows="5"></textarea>
            </div>

              <h6>সাক্ষী </h6>

            <div class="form-group">
                        <label for="nameandaddress">১.নাম ও ঠিকানা</label>
                        <input type="text" class="form-control" id='nameandaddress'></input>
            </div>

            <div class="form-group">
                        <label for="nameandaddresstwo">২.নাম ও ঠিকানা</label>
                        <input type="text" class="form-control" id='nameandaddresstwo'></input>
            </div>

            <h6>বিবরণী লিপিবদ্ধকারী অফিসার</h6>

            <div class="form-group">
                        <label for="nameorrank">নাম/পদবি</label>
                        <input type="text" class="form-control" placeholder="নাম/পদবি" id='nameorrank'></input>
                        <input type="date" class="form-control" placeholder="তারিখ" id='infoentrydate'></input>
            </div>

            <h6>অনুসন্ধানকারী অফিসার</h6>

            <div class="form-group">
                        <label for="nameorranktwo">নাম/পদবি</label>
                        <input type="text" class="form-control" placeholder="নাম/পদবি" id='nameorranktwo'></input>
                        <input type="date" class="form-control" placeholder="তারিখ" id='infoentrydatetwo'></input>
            </div>

            <h6>তত্ত্বাবধায়নকারী অফিসার</h6>

            <div class="form-group">
                        <label for="nameorrankthree">নাম/পদবি</label>
                        <input type="text" class="form-control" placeholder="নাম/পদবি" id='nameorrankthree'></input>
                        <input type="date" class="form-control" placeholder="তারিখ" id='infoentrydatefour'></input>
            </div>

            <div class="form-group">
                        <label for="lawrulesnumber">আইনের ধারা</label>
                        <input type="text" class="form-control" id='lawrulesnumber'></input>
            </div>

            <div class="form-group">
                        <label for="casesituation">কেসের অবস্থা</label>
                        <select class="form-control" id="casesituation">
                        <option value="0">১.চার্জশীট</option>
                        <option value="1">২.ফাইনাল রিপোর্ট</option>
                        <option value="2">৩.তদন্তাধিন</option>
                        </select>
            </div>


            <button class="btn btn-secondary" id="officecontinue">Continue</button>
          </div>
          <!-- 29-37 end -->

          <!-- 38-52 start -->
          <div class="tab-pane fade" id="vehicledriver" role="tabpanel">
            <h4>যানবাহন/চালক/যাত্রী</h4>
            <div id="scheduleAccordion" class="mb-3" role="tablist" aria-multiselectable="true">
              <div id="vehiclenumberone">
                <!--the place to show vehicle -->
              </div>
              <div id="drivernumberone">
                <!--the place to show driver -->
              </div>
            </div>
            
            <button class="btn btn-secondary" id="vehicledrivercontinue">Continue</button>
          </div>
          <!-- 38-52 end -->

          
          <div class="tab-pane fade" id="passenger" role="tabpanel">
            <h4>Schedule</h4>
            
            <button class="btn btn-secondary" id="passengercontinue">Continue</button>
          </div>
          


          
          <div class="tab-pane fade" id="finalstep" role="tabpanel">
            <h4>Review</h4>
            <button class="btn btn-primary btn-block" id="activate">Activate this Campaign!</button>
          </div>
        </div>
        <div class="progress mt-5">
          <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Step 1 of 5</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save for later</button>
      </div>
    </div>
  </div>
</div>



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
