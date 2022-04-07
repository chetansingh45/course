<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Webeesocial Job Admin</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Style css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <img src="https://www.webeesocial.com/wp-content/uploads/2020/12/logo-tm-compressed.png" alt="Webeesocial Logo">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Job List
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="login.php" class="dropdown-item ai-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="index.php" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-093-waving"></i>
                            <span class="nav-text">Jobs</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="job-list.php">Job Lists</a></li>
                            <li><a href="job-application.php">Job Application</a></li>
                            <li><a href="new-job.php">New Job</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-041-graph"></i>
                            <span class="nav-text">Employees</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="employees-dashoard.php">Dashboard</a></li>
                            <li><a href="attendance.php">Attendance</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="card bg-primary-light shadow-none">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <span class="p-3 mr-3 feature-icon rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="var(--primary)" class="bi bi-calendar4-week" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                        </svg>
                                    </span>
                                    <div class="media-body text-right">
                                        <p class="fs-18 mb-2">Interviews Schedule</p>
                                        <span class="fs-48 text-primary font-w600">86</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card bg-primary-light shadow-none">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <span class="p-3 mr-3 feature-icon rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="var(--primary)" class="bi bi-briefcase" viewBox="0 0 16 16">
                                            <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </span>
                                    <div class="media-body text-right">
                                        <p class="fs-18 mb-2">Application Sent</p>
                                        <span class="fs-48 text-primary font-w600">75</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card bg-primary-light shadow-none">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <span class="p-3 mr-3 feature-icon rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="var(--primary)" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        </svg>
                                    </span>
                                    <div class="media-body text-right">
                                        <p class="fs-18 mb-2">Profile Viewed</p>
                                        <span class="fs-48 text-primary font-w600">45</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card bg-primary-light shadow-none">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <span class="p-3 mr-3 feature-icon rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="var(--primary)" class="bi bi-briefcase" viewBox="0 0 16 16">
                                            <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </span>
                                    <div class="media-body text-right">
                                        <p class="fs-18 mb-2">Total Jobs</p>
                                        <span class="fs-48 text-primary font-w600">45</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card bg-primary-light shadow-none">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <span class="p-3 mr-3 feature-icon rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="var(--primary)" class="bi bi-briefcase" viewBox="0 0 16 16">
                                            <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </span>
                                    <div class="media-body text-right">
                                        <p class="fs-18 mb-2">Closed Jobs</p>
                                        <span class="fs-48 text-primary font-w600">45</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h4 class="fs-20 font-w600">Latest Job Applications</h4>
                        <!-- Table -->
                        <div class="table-responsive mt-4">
                            <table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Position</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Applied On</th>
                                        <th>Submitted By</th>
                                        <th>Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td class="wspace-no">Database analyst</td>
                                        <td>Jordan</td>
                                        <td>Jordan@gmail.com</td>
                                        <td>1234598765</td>
                                        <td>24-01-2021</td>
                                        <td>Nicholas</td>
                                        <td><span class="btn btn-warning btn-sm btn-rounded">Pending</span>
                                        </td>
                                        <td class="action-btn wspace-no text-center">
                                            <span><a href="javascript:void(0);"><i class="fas fa-check text-success"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="fas fa-times text-danger"></i></a></span>
                                            <span><a href="user-profile.php"><i class="fas fa-eye"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="far fa-trash-alt text-danger"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="fas fa-download text-warning"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td class="wspace-no">Network architect</td>
                                        <td>Asher</td>
                                        <td>Jordan@gmail.com</td>
                                        <td>1234598765</td>
                                        <td>24-01-2021</td>
                                        <td>Dominic</td>
                                        <td><span class="btn btn-warning btn-sm btn-rounded">Pending</span>
                                        </td>
                                        <td class="action-btn wspace-no text-center">
                                            <span><a href="javascript:void(0);"><i class="fas fa-check text-success"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="fas fa-times text-danger"></i></a></span>
                                            <span><a href="user-profile.php"><i class="fas fa-eye"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="far fa-trash-alt text-danger"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="fas fa-download text-warning"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td class="wspace-no">Network architect</td>
                                        <td>Carter</td>
                                        <td>Jordan@gmail.com</td>
                                        <td>1234598765</td>
                                        <td>24-01-2021</td>
                                        <td>Austin</td>
                                        <td><span class="btn btn-info btn-sm btn-rounded">Pending</span>
                                        </td>
                                        <td class="action-btn wspace-no text-center">
                                            <span><a href="javascript:void(0);"><i class="fas fa-check text-success"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="fas fa-times text-danger"></i></a></span>
                                            <span><a href="user-profile.php"><i class="fas fa-eye"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="far fa-trash-alt text-danger"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="fas fa-download text-warning"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td class="wspace-no">Systems analyst</td>
                                        <td>Grayson</td>
                                        <td>Jordan@gmail.com</td>
                                        <td>1234598765</td>
                                        <td>24-01-2021</td>
                                        <td>Everett</td>
                                        <td><span class="btn btn-danger btn-sm btn-rounded">Rejected</span>
                                        </td>
                                        <td class="action-btn wspace-no text-center">
                                            <span><a href="javascript:void(0);"><i class="fas fa-check text-success"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="fas fa-times text-danger"></i></a></span>
                                            <span><a href="user-profile.php"><i class="fas fa-eye"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="far fa-trash-alt text-danger"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="fas fa-download text-warning"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td class="wspace-no">Network engineer</td>
                                        <td>Thomas</td>
                                        <td>Jordan@gmail.com</td>
                                        <td>1234598765</td>
                                        <td>24-01-2021</td>
                                        <td>Brooks</td>
                                        <td><span class="btn btn-warning btn-sm btn-rounded">Pending</span>
                                        </td>
                                        <td class="action-btn wspace-no text-center">
                                            <span><a href="javascript:void(0);"><i class="fas fa-check text-success"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="fas fa-times text-danger"></i></a></span>
                                            <span><a href="user-profile.php"><i class="fas fa-eye"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="far fa-trash-alt text-danger"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="fas fa-download text-warning"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td class="wspace-no">Service desk analyst</td>
                                        <td>Miles</td>
                                        <td>Jordan@gmail.com</td>
                                        <td>1234598765</td>
                                        <td>24-01-2021</td>
                                        <td>Wesley</td>
                                        <td><span class="btn btn-primary btn-sm btn-rounded">Selected</span>
                                        </td>
                                        <td class="action-btn wspace-no text-center">
                                            <span><a href="javascript:void(0);"><i class="fas fa-check text-success"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="fas fa-times text-danger"></i></a></span>
                                            <span><a href="user-profile.php"><i class="fas fa-eye"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="far fa-trash-alt text-danger"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="fas fa-download text-warning"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Network Engineer</td>
                                        <td>Adrian</td>
                                        <td>Jordan@gmail.com</td>
                                        <td>1234598765</td>
                                        <td>24-01-2021</td>
                                        <td>Kayden</td>
                                        <td><span class="btn btn-success btn-sm btn-rounded">Success</span>
                                        </td>
                                        <td class="action-btn wspace-no text-center">
                                            <span><a href="javascript:void(0);"><i class="fas fa-check text-success"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="fas fa-times text-danger"></i></a></span>
                                            <span><a href="user-profile.php"><i class="fas fa-eye"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="far fa-trash-alt text-danger"></i></a></span>
                                            <span><a href="javascript:void(0);"><i class="fas fa-download text-warning"></i></a></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://www.webeesocial.com/" target="_blank">Webeesocial</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <!-- Apex Chart -->
    <script src="vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script>

    <!-- Chart piety plugin files -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

    <!-- Dashboard 1 -->




    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>



</body>

</html>