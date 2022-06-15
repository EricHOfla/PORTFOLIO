
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link rel="icon" type="text/css" href="assets/img/download.PNG">
  

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>
 <?php
      session_start();
      include('connect.php');
      if(!isset($_SESSION['username']))
    header('location:../login.php');
 
     ?>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <i style="color:green;" class="bi bi-list toggle-sidebar-btn"></i>
        <h6 class="d-none d-lg-block">Eric H Ofla</h6>
      </a></div>
      <i style="color:green;" class="bi bi-list toggle-sidebar-btn"></i>
    <!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="t.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php
          echo($_SESSION['account_type']);?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php
          echo($_SESSION['username']);?></h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="Logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="fa fa-th-large"></i>
          <span>Dashboard</span>

        </a>
      </li><!-- End Dashboard Nav -->

           
      <li class="nav-item">
        <a class="nav-link collapsed" href="Announcement.php">
         <i class="fa fa-list-alt"></i>
          <span>Message</span>
        </a>
      </li><!-- End Profile Page Nav -->

     <li class="nav-item">
        <a class="nav-link collapsed" href="adduser.php">
          <i class="fa fa-users"></i>
          <span>Users</span>
        </a>
      </li><!-- End Register Page Nav -->


       <li class="nav-item">
        <a class="nav-link collapsed" href="advertising.php">
          <i class="fa fa-adn"></i>
          <span>advertising</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

       <li class="nav-item">
        <a class="nav-link collapsed" href="clpic.php">
          <i class="fa fa-check-square-o"></i>
          <span>Pic</span>
        </a>
      </li><!-- End Profile Page Nav -->
     
   

      <li class="nav-item">
        <a class="nav-link collapsed" href="profile.php">
          <i class="fa fa-user"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
     
       <li class="nav-item">
        <a class="nav-link collapsed" href="setting.php">
          <i class="fa fa-gear"></i>
          <span>Site Setting</span>
        </a>
      </li><!-- End Error 404 Page Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="Logout.php">
          <i class="fa fa-sign-out"></i>
          <span>Sign Out</span>
        </a>
      </li><!-- End Login Page Nav -->

      

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h4> Welcome Back 
        <?php
          echo($_SESSION['username']);?>....!</h4>


    
    </div><!-- End Page Title -->