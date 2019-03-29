<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- jquery UI -->
    <link href="../plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/modernizr.min.js"></script>

</head>


<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">

        <div class="slimscroll-menu" id="remove-scroll">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                            <span>
                                <img src="assets/images/logo.png" alt="" height="22">
                            </span>
                    <i>
                        <img src="assets/images/logo_sm.png" alt="" height="28">
                    </i>
                </a>
            </div>

            <!-- User box -->
            <div class="user-box">
                <div class="user-img">
                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                </div>
                <h5><a href="#">Maxine Kennedy</a> </h5>
                <p class="text-muted">Admin Head</p>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <!--<li class="menu-title">Navigation</li>-->

                    <li>
                        <a href="index.html">
                            <i class="fi-air-play"></i><span class="badge badge-danger badge-pill pull-right">7</span> <span> Dashboard </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Apps </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="apps-calendar.html">Calendar</a></li>
                            <li><a href="apps-tickets.html">Tickets</a></li>
                            <li><a href="apps-taskboard.html">Task Board</a></li>
                            <li><a href="apps-task-detail.html">Task Detail</a></li>
                            <li><a href="apps-contacts.html">Contacts</a></li>
                            <li><a href="apps-projects.html">Projects</a></li>
                            <li><a href="apps-companies.html">Companies</a></li>
                            <li><a href="apps-file-manager.html">File Manager</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-mail"></i><span> Email </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read Email</a></li>
                            <li><a href="email-compose.html">Compose Email</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-layout"></i><span> Layouts </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="layouts-menucollapsed.html">Menu Collapsed</a></li>
                            <li><a href="layouts-small-menu.html">Small Menu</a></li>
                            <li><a href="layouts-dark-lefbar.html">Dark Leftbar</a></li>
                            <li><a href="layouts-center-logo.html">Center Logo</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span> UI Elements </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-spinners.html">Spinners</a></li>
                            <li><a href="ui-ribbons.html">Ribbons</a></li>
                            <li><a href="ui-tooltips-popovers.html">Tooltips & Popover</a></li>
                            <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                            <li><a href="ui-tabs.html">Tabs</a></li>
                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                            <li><a href="ui-notifications.html">Notification</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                            <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                            <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                            <li><a href="ui-range-slider.html">Range Slider</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="widgets.html">
                            <i class="fi-command"></i> <span> Widgets </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-google.html">Google Chart</a></li>
                            <li><a href="chart-chartist.html">Chartist Chart</a></li>
                            <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                            <li><a href="chart-knob.html">Jquery Knob</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-disc"></i><span class="badge badge-info pull-right">10</span> <span> Forms </span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-advanced.html">Form Advanced</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-pickers.html">Form Pickers</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-mask.html">Form Masks</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                            <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                            <li><a href="form-x-editable.html">X Editable</a></li>
                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-box"></i><span> Icons </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                            <li><a href="icons-feather.html">Feather Icons</a></li>
                            <li><a href="icons-simpleline.html">Simple Line Icons</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-paper"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-datatable.html">Data Tables</a></li>
                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                            <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                            <li><a href="tables-foo.html">Foo Tables</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">More</li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-location-2"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="maps-google.html">Google Maps</a></li>
                            <li><a href="maps-vector.html">Vector Maps</a></li>
                            <li><a href="maps-mapael.html">Mapael Maps</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-paper-stack"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="page-starter.html">Starter Page</a></li>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-logout.html">Logout</a></li>
                            <li><a href="page-recoverpw.html">Recover Password</a></li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                            <li><a href="page-404.html">Error 404</a></li>
                            <li><a href="page-404-alt.html">Error 404-alt</a></li>
                            <li><a href="page-500.html">Error 500</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);"><i class="fi-marquee-plus"></i><span class="badge badge-success pull-right">Hot</span> <span> Extra Pages </span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="extras-timeline.html">Timeline</a></li>
                            <li><a href="extras-profile.html">Profile</a></li>
                            <li><a href="extras-invoice.html">Invoice</a></li>
                            <li><a href="extras-faq.html">FAQ</a></li>
                            <li><a href="extras-pricing.html">Pricing</a></li>
                            <li><a href="extras-email-template.html">Email Templates</a></li>
                            <li><a href="extras-ratings.html">Ratings</a></li>
                            <li><a href="extras-search-results.html">Search Results</a></li>
                            <li><a href="extras-gallery.html">Gallery</a></li>
                            <li><a href="extras-maintenance.html">Maintenance</a></li>
                            <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-share"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="false">
                            <li><a href="javascript: void(0);">Level 1.1</a></li>
                            <li><a href="javascript: void(0);" aria-expanded="false">Level 1.2 <span class="menu-arrow"></span></a>
                                <ul class="nav-third-level nav" aria-expanded="false">
                                    <li><a href="javascript: void(0);">Level 2.1</a></li>
                                    <li><a href="javascript: void(0);">Level 2.2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
            <!-- Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="content-page">

        <!-- Top Bar Start -->
        <div class="topbar">

            <nav class="navbar-custom">

                <ul class="list-unstyled topbar-right-menu float-right mb-0">

                    <li class="hide-phone app-search">
                        <form>
                            <input type="text" placeholder="Search..." class="form-control">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="fi-bell noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                            </div>

                            <div class="slimscroll" style="max-height: 230px;">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="fi-speech-bubble noti-icon"></i>
                            <span class="badge badge-custom badge-pill noti-icon-badge">6</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Chat</h5>
                            </div>

                            <div class="slimscroll" style="max-height: 230px;">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Sam Garret</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Sherry Marshall</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-6.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Shawn Millard</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1">Maxine K <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-head"></i> <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-cog"></i> <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-help"></i> <span>Support</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-lock"></i> <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-power"></i> <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="dripicons-menu"></i>
                        </button>
                    </li>
                    <li>
                        <div class="page-title-box">
                            <h4 class="page-title">Task Board </h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                <li class="breadcrumb-item active">Task Board</li>
                            </ol>
                        </div>
                    </li>

                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->



        <!-- Start Page content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="text-dark header-title m-t-0">Upcoming</h4>
                            <p class="text-muted m-b-30 font-13">
                                Your awesome text goes here. Your awesome text goes here.
                            </p>

                            <ul class="sortable-list taskList list-unstyled" id="upcoming">
                                <li class="task-warning" id="task1">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    <div class="clearfix"></div>
                                    <div class="mt-3">
                                        <p class="pull-right mb-0 mt-2">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                        </p>
                                        <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-1.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Petey Cruiser</span></a> </p>
                                    </div>
                                </li>
                                <li class="task-success" id="task2">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    Many desktop publishing packages and web page editors now use Lorem.
                                    <div class="clearfix"></div>
                                    <div class="mt-3">
                                        <p class="pull-right mb-0 mt-2">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                        </p>
                                        <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-2.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Anna Sthesia</span></a> </p>
                                    </div>
                                </li>
                                <li id="task3">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    If you are going to use a passage of Lorem Ipsum..
                                    <div class="clearfix"></div>
                                    <div class="mt-3">
                                        <p class="pull-right mb-0 mt-2">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                        </p>
                                        <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-3.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Gail Forcewind</span></a> </p>
                                    </div>
                                </li>
                                <li class="task-info" id="task4">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    <div class="clearfix"></div>
                                    <div class="mt-3">
                                        <p class="pull-right mb-0 mt-2">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                        </p>
                                        <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-4.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Maya Didas</span></a> </p>
                                    </div>
                                </li>
                                <li class="task-danger" id="task5">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class="clearfix"></div>
                                    <div class="mt-3">
                                        <p class="pull-right mb-0 mt-2">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                        </p>
                                        <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-5.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Rick O'Shea</span></a> </p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-custom btn-block mt-3 waves-effect waves-light"><i class="mdi mdi-plus-circle"></i> Add New</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="text-dark header-title m-t-0">In Progress</h4>
                            <p class="text-muted m-b-30 font-13">
                                Your awesome text goes here.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                            </p>

                            <ul class="sortable-list taskList list-unstyled" id="inprogress">
                                <li id="task9">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    If you are going to use a passage of Lorem Ipsum..
                                    <div class="clearfix"></div>
                                    <div class="mt-3">
                                        <p class="pull-right mb-0 mt-2">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                        </p>
                                        <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-3.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Gail Forcewind</span></a> </p>
                                    </div>
                                </li>
                                <li class="task-info" id="task10">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    <div class="clearfix"></div>
                                    <div class="mt-3">
                                        <p class="pull-right mb-0 mt-2">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                        </p>
                                        <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-4.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Maya Didas</span></a> </p>
                                    </div>
                                </li>
                                <li class="task-danger" id="task11">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class="clearfix"></div>
                                    <div class="mt-3">
                                        <p class="pull-right mb-0 mt-2">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                        </p>
                                        <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-5.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Rick O'Shea</span></a> </p>
                                    </div>
                                </li>
                                <li class="task-warning" id="task7">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    <div class="clearfix"></div>
                                    <div class="mt-3">
                                        <p class="pull-right mb-0 mt-2">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                        </p>
                                        <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-1.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Petey Cruiser</span></a> </p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-custom btn-block mt-3 waves-effect waves-light"><i class="mdi mdi-plus-circle"></i> Add New</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="text-dark header-title m-t-0">Completed</h4>
                            <p class="text-muted m-b-30 font-13">
                                Your awesome text goes here. Your awesome text goes here.
                            </p>

                            <ul class="sortable-list taskList list-unstyled" id="completed">
                                <li class="task-warning" id="task14">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    <div class="clearfix"></div>
                                    <div class="mt-3">
                                        <p class="pull-right mb-0 mt-2">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                        </p>
                                        <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-1.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Petey Cruiser</span></a> </p>
                                    </div>
                                </li>
                                <li class="task-success" id="task15">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    Many desktop publishing packages and web page editors now use Lorem.
                                    <div class="clearfix"></div>
                                    <div class="mt-3">
                                        <p class="pull-right mb-0 mt-2">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                        </p>
                                        <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-2.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Anna Sthesia</span></a> </p>
                                    </div>
                                </li>
                                <li id="task16">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    If you are going to use a passage of Lorem Ipsum..
                                    <div class="clearfix"></div>
                                    <div class="mt-3">
                                        <p class="pull-right mb-0 mt-2">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                        </p>
                                        <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-3.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Gail Forcewind</span></a> </p>
                                    </div>
                                </li>
                                <li class="task-info" id="task17">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    <div class="clearfix"></div>
                                    <div class="mt-3">
                                        <p class="pull-right mb-0 mt-2">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                        </p>
                                        <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-4.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Maya Didas</span></a> </p>
                                    </div>
                                </li>
                                <li class="task-danger" id="task18">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class="clearfix"></div>
                                    <div class="mt-3">
                                        <p class="pull-right mb-0 mt-2">
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                        </p>
                                        <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-5.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Rick O'Shea</span></a> </p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-custom btn-block mt-3 waves-effect waves-light"><i class="mdi mdi-plus-circle"></i> Add New</a>
                        </div>
                    </div>

                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            2018 © Highdmin. - Coderthemes.com
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->



<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>

<!-- Jquery Ui js -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

<script>
    $(document).ready(function () {

        $("#upcoming, #inprogress, #completed").sortable({
            connectWith: ".taskList",
            placeholder: 'task-placeholder',
            forcePlaceholderSize: true,
            update: function (event, ui) {

                var todo = $("#todo").sortable("toArray");
                var inprogress = $("#inprogress").sortable("toArray");
                var completed = $("#completed").sortable("toArray");
            }
        }).disableSelection();

    });
</script>

</body>
</html>