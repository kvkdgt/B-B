<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Status B&B</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{env('BASE_URL')}}/theme/assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{env('BASE_URL')}}/theme/assets/css/style.css">
    <link rel="stylesheet" href="{{env('BASE_URL')}}/theme/assets/css/components.css">
    <link rel="stylesheet" href="{{env('BASE_URL')}}/theme/assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="{{env('BASE_URL')}}/theme/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{env('BASE_URL')}}/theme/assets/css/custom.css">
    <link rel='shortcut icon' type='{{env("BASE_URL")}}/theme/image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>

                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">


                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span class="logo-name">Kiran Ispat</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span><a href="{{route('dashboard')}}">Dashboard</a></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('hostNotification') }}">Notificaiton</a></li>
                                <li><a class="nav-link" href="{{ route('chat') }}">Chat</a></li>
                            </ul>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Bookings</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('hostacceptedbooking') }}">Accepted</a></li>
                                <li><a class="nav-link" href="{{ route('hostrejectedbooking') }}">Rejected</a></li>
                                <li><a class="nav-link" href="{{ route('hostrefundedbooking') }}">Refunded</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>My Listing</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('alllisting') }}">View All</a></li>
                                <li><a class="nav-link" href="{{ route('likedlisting') }}">View Liked Listing</a></li>
                                <li><a class="nav-link" href="{{ route('savedlisting') }}">View Saved Listing</a></li>
                                <li><a class="nav-link" href="{{ route('createListing') }}">Create New Listing</a></li>


                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Payments & Payouts</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('alllisting') }}">Revenue</a></li>
                                <li><a class="nav-link" href="{{ route('likedlisting') }}">Net Income</a></li>
                                <li><a class="nav-link" href="{{ route('savedlisting') }}">Update pay Details</a></li>


                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Settings</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('alllisting') }}">Profile Setting</a></li>
                                <li><a class="nav-link" href="{{ route('likedlisting') }}">Change Password</a></li>


                            </ul>
                        </li>


                        <!-- 
                        <li class="dropdown active">
                            <a class="nav-link "><i data-feather="package"></i><span>Products</span></a>
                        </li> -->



                    </ul>
                </aside>
            </div>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <!-- add content here -->
                        @yield('content')

                    </div>
                </section>
                <div class="settingSidebar">


                </div>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{env('BASE_URL')}}/theme/assets/js/app.min.js"></script>
    <script src="{{env('BASE_URL')}}/theme/assets/bundles/datatables/datatables.min.js"></script>
    <script src="{{env('BASE_URL')}}/theme/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{env('BASE_URL')}}/theme/assets/bundles/datatables/export-tables/dataTables.buttons.min.js"></script>
    <script src="{{env('BASE_URL')}}/theme/assets/bundles/datatables/export-tables/buttons.flash.min.js"></script>
    <script src="{{env('BASE_URL')}}/theme/assets/bundles/datatables/export-tables/jszip.min.js"></script>
    <script src="{{env('BASE_URL')}}/theme/assets/bundles/datatables/export-tables/pdfmake.min.js"></script>
    <script src="{{env('BASE_URL')}}/theme/assets/bundles/datatables/export-tables/vfs_fonts.js"></script>
    <script src="{{env('BASE_URL')}}/theme/assets/bundles/datatables/export-tables/buttons.print.min.js"></script>
    <script src="{{env('BASE_URL')}}/theme/assets/js/page/datatables.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{{env('BASE_URL')}}/theme/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="{{env('BASE_URL')}}/theme/assets/js/custom.js"></script>
</body>




</html>