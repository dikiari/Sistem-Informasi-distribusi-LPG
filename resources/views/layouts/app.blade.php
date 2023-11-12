<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard Admin - SISTEM INFORMASI PT. PRIMADONA PERMATASARI MRANGGEN
        DEMAK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assetsAdmin/images/favicon.ico') }}">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="{{ asset('assetsAdmin/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsAdmin/css/custom.css') }}">

    <!-- Vector Map css -->
    <link rel="stylesheet"
        href="{{ asset('assetsAdmin/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('assetsAdmin/js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('assetsAdmin/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('assetsAdmin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    {{-- Data Tables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center gap-1">

                    <!-- Topbar Brand Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="" class="logo-light">
                            <span class="logo-lg">
                                <img src="{{ asset('assetsAdmin/images/logo.png') }}" alt="logo">
                            </span>
                            <span class="logo-sm">
                                <img src="{{ asset('assetsAdmin/images/logo-sm.png') }}" alt="small logo">
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="" class="logo-dark">
                            <span class="logo-lg">
                                <img src="{{ asset('assetsAdmin/images/logo-dark.png') }}" alt="dark logo">
                            </span>
                            <span class="logo-sm">
                                <img src="{{ asset('assetsAdmin/images/logo-sm.png') }}" alt="small logo">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="ri-menu-line"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>


                </div>

                <ul class="topbar-menu d-flex align-items-center gap-3">
                    <li class="dropdown d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ri-search-line fs-22"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="search" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>



                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ri-notification-3-line fs-22"></i>
                            <span class="noti-icon-badge badge text-bg-pink">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                            <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold"> Notification</h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                            <small>Clear All</small>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div style="max-height: 300px;" data-simplebar>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary-subtle">
                                        <i class="mdi mdi-comment-account-outline text-primary"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="noti-time">1 min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning-subtle">
                                        <i class="mdi mdi-account-plus text-warning"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="noti-time">5 hours ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger-subtle">
                                        <i class="mdi mdi-heart text-danger"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <small class="noti-time">3 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-pink-subtle">
                                        <i class="mdi mdi-comment-account-outline text-pink"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admi
                                        <small class="noti-time">4 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-purple-subtle">
                                        <i class="mdi mdi-account-plus text-purple"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="noti-time">7 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success-subtle">
                                        <i class="mdi mdi-heart text-success"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b>.
                                        <small class="noti-time">Carlos Crouch liked</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                                class="dropdown-item text-center text-primary text-decoration-underline fw-bold notify-item border-top border-light py-2">
                                View All
                            </a>

                        </div>
                    </li>


                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="{{ asset('assetsAdmin/images/users/avatar-1.jpg') }}" alt="user-image"
                                    width="32" class="rounded-circle">
                            </span>
                            <span class="d-lg-block d-none">
                                <h5 class="my-0 fw-normal">{{ Auth::user()->name }} <i
                                        class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i></h5>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>



                            <!-- item-->
                            <a href="{{ route('logout') }}" class="dropdown-item">
                                <i class="ri-logout-box-line fs-18 align-middle me-1"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <a href="" class="logo logo-light">
                <span class="logo-lg">
                    <img src="{{ asset('assetsAdmin/images/logo.png') }}" alt="logo">
                </span>
                <span class="logo-sm">
                    <img src="{{ asset('assetsAdmin/images/logo-sm.png') }}" alt="small logo">
                </span>
            </a>

            <!-- Brand Logo Dark -->
            <a href="" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="{{ asset('assetsAdmin/images/logo-dark.png') }}" alt="dark logo">
                </span>
                <span class="logo-sm">
                    <img src="{{ asset('assetsAdmin/images/logo-sm.png') }}" alt="small logo">
                </span>
            </a>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title">Main</li>

                    <li class="side-nav-item">
                        <a href="{{ route('dashboard') }}" class="side-nav-link">
                            <i class="ri-dashboard-3-line"></i>
                            <span class="badge bg-success float-end"></span>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTeacher" aria-expanded="false"
                            aria-controls="sidebarTeacher" class="side-nav-link">
                            <i class="ri-pages-line"></i>
                            <span> Vendor </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTeacher">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ route('vendor.index') }}">Data Vendor</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarStudent" aria-expanded="false"
                            aria-controls="sidebarStudent" class="side-nav-link">
                            <i class="ri-pages-line"></i>
                            <span> Distribusi </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarStudent">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ route('distributionIndex') }}">Data Distribusi</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarStudent" aria-expanded="false"
                            aria-controls="sidebarUser" class="side-nav-link">
                            <i class="ri-pages-line"></i>
                            <span> User Akun</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarStudent">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ route('userIndex') }}">Data User</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!--- End Sidemenu -->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    @yield('content')

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © SI Mumtaza - Developed by <b>SM-Technology</b>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->


    <!-- Vendor js -->
    <script src="{{ asset('assetsAdmin/js/vendor.min.js') }}"></script>

    <!-- Daterangepicker js -->
    <script src="{{ asset('assetsAdmin/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assetsAdmin/vendor/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Apex Charts js -->
    <script src="{{ asset('assetsAdmin/vendor/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector Map js -->
    <script src="{{ asset('assetsAdmin/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script
        src="{{ asset('assetsAdmin/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}">
    </script>

    <!-- Dashboard App js -->
    <script src="{{ asset('assetsAdmin/js/pages/dashboard.js') }}"></script>


    <!-- App js -->
    <script src="{{ asset('assetsAdmin/js/app.min.js') }}"></script>


    {{-- Dara Tables --}}
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function(){
            $('#tabel-data').DataTable();
        });
    </script>


</body>

</html>
