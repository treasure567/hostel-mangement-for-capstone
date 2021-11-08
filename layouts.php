<?php
include ("server.php");

if (!isset($_SESSION['username']))
{
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Capstone Hostel Dashboard</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="assets/vendors/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="assets/vendors/chartist/chartist.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="assets/css/style3.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="assets/images2/favicon.png"
        />
    </head>

    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex align-items-center">
                    <a class="navbar-brand brand-logo" href="index.php">
            CAPSTONE
          </a>
                    <a class="navbar-brand brand-logo-mini" href="index.php">CAPSTONE</a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
                    <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome&nbsp;<b><?php echo $list_f_name ?>&nbsp;<?php echo $list_l_name ?></b></h5>
                    <ul class="navbar-nav navbar-nav-right ml-auto">
                        <form class="search-form d-none d-md-block"
                        action="#">
                            <i class="icon-magnifier"></i>
                            <input type="search" class="form-control"
                            placeholder="Search Here"
                            title="Search here">
                        </form>
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator message-dropdown"
                            id="messageDropdown"
                            href="#" data-toggle="dropdown"
                            aria-expanded="false">
                                <i class="icon-speech"></i>
                                <span class="count">7</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                            aria-labelledby="messageDropdown">
                                <a class="dropdown-item py-3">
                                    <p class="mb-0 font-weight-medium float-left">You have
                                        7
                                        unread
                                        mails
                                        </p>
                                    <span class="badge badge-pill badge-primary float-right">View all</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="assets/images2/faces/face10.jpg"
                                        alt="image"
                                        class="img-sm profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow py-2">
                                        <p class="preview-subject ellipsis font-weight-medium text-dark">Marian
                                            Garner
                                            </p>
                                        <p class="font-weight-light small-text">
                                        The
                                            meeting
                                            is
                                            cancelled
                                            </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="assets/images2/faces/face12.jpg"
                                        alt="image"
                                        class="img-sm profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow py-2">
                                        <p class="preview-subject ellipsis font-weight-medium text-dark">David
                                            Grey
                                            </p>
                                        <p class="font-weight-light small-text">
                                        The
                                            meeting
                                            is
                                            cancelled
                                            </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="assets/images2/faces/face1.jpg"
                                        alt="image"
                                        class="img-sm profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow py-2">
                                        <p class="preview-subject ellipsis font-weight-medium text-dark">Travis
                                            Jenkins
                                            </p>
                                        <p class="font-weight-light small-text">
                                        The
                                            meeting
                                            is
                                            cancelled
                                            </p>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                            <a class="nav-link dropdown-toggle" id="UserDropdown"
                            href="#" data-toggle="dropdown"
                            aria-expanded="false">
                                <img class="img-xs rounded-circle ml-2" src="assets/images2/faces/face8.jpg"
                                alt="Profile image">                                <span class="font-weight-normal"> <?php echo $list_f_name ?>&nbsp;<?php echo $list_l_name ?></span></a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="UserDropdown">
                                <div class="dropdown-header text-center">
                                    <img class="img-md rounded-circle" src="assets/images2/faces/face8.jpg"
                                    alt="Profile image">
                                    <p class="mb-1 mt-3">
                                        <?php echo $list_f_name ?>&nbsp;
                                            <?php echo $list_l_name ?>
                                    </p>
                                    <p class="font-weight-light text-muted mb-0">
                                        <?php echo $list_email ?>
                                    </p>
                                </div>
                                <a class="dropdown-item" href="edit-account.php"><i class="dropdown-item-icon icon-user text-primary"></i>                                    Edit
                                    Profile</a>
                                <a class="dropdown-item" href="edit-account_c-password.php"><i class="dropdown-item-icon icon-lock text-primary"></i>Change
                                    Password</a>
                                <a href="index.php?logout='1'" class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign
                                    Out</a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
                    type="button" data-toggle="offcanvas">
                        <span class="icon-menu"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item nav-profile">

                            <div class="profile-image" style="width: 100% !important; height: 160px;">
                                <img class="img-xs rounded-circle" src="assets/images2/faces/face8.jpg"
                                style="width: 80% !important; height: 150px;"
                                alt="profile image">
                                <div class="dot-indicator bg-success"></div>
                            </div>
                            <br>
                            <div class="text-wrapper text-center" style="color: white;">
                                <p class="profile-name">
                                    <b><?php echo $list_f_name ?>&nbsp;
                                        <?php echo $list_l_name ?></b>
                                </p>
                                <p class="designation"><b>Registration ID:</b>
                                    <span
                                    style="color: yellow;">
                                        <?php echo $list_reg_num ?>
                                            </span>
                                </p>
                                <p class="">Email Address:
                                    <span
                                    style="color: yellow;">
                                        <?php echo $list_email ?>
                                            </span>
                                </p>
                                <p class="designation">Contact Number:
                                    <span
                                    style="color: yellow;">
                                        <?php echo $list_c_num ?>
                                            </span>
                                </p>
                                <p class="designation">Gender:
                                    <span
                                    style="color: yellow;">
                                        <?php echo $list_gender ?>
                                            </span>
                                </p>
                                <p class="designation">Department:
                                    <span
                                    style="color: yellow;">
                                        <?php echo $list_dept ?>
                                            </span>
                                </p>
                                <p class="designation">Course:
                                    <span
                                    style="color: yellow;">
                                        <?php echo $list_course ?>
                                            </span>
                                </p>
                            </div>


                        </li>
                        <li class="nav-item nav-category">
                            <span class="nav-link">Dashboard</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <span class="menu-title">Dashboard</span>
                                <i class="icon-screen-desktop menu-icon"></i>
                            </a>
                        </li>




                        <?php  if (isset($_SESSION['username'])) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?logout='1'">
                                    <span class="menu-title">Logout</span>
                                    <i class="icon-power menu-icon"></i>
                                </a>
                            </li>
                            <?php endif ?>

                    </ul>
                </nav>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row purchace-popup">
                            <div class="col-12 stretch-card grid-margin">

                            </div>
                        </div>
