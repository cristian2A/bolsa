<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Mail</title>

        <!-- STYLESHEETS -->
        <style type="text/css">
            [fuse-cloak],
            .fuse-cloak {
                display: none !important;
            }
        </style>

        <!-- Icons.css -->
        <link type="text/css" rel="stylesheet" href="../assets/icons/fuse-icon-font/style.css">

        <!-- Animate.css -->
        <link type="text/css" rel="stylesheet" href="../assets/vendor/animate.css/animate.min.css">

        <!-- PNotify -->
        <link type="text/css" rel="stylesheet" href="../assets/vendor/pnotify/pnotify.custom.min.css">

        <!-- Nvd3 - D3 Charts -->
        <link type="text/css" rel="stylesheet" href="../assets/vendor/nvd3/build/nv.d3.min.css"/>

        <!-- Perfect Scrollbar -->
        <link type="text/css" rel="stylesheet" href="../assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css"/>

        <!-- Fuse Html -->
        <link type="text/css" rel="stylesheet" href="../assets/vendor/fuse-html/fuse-html.min.css"/>

        <!-- Main CSS -->
        <link type="text/css" rel="stylesheet" href="../assets/css/main.css">
        <!-- / STYLESHEETS -->

        <!-- JAVASCRIPT -->

        <!-- jQuery -->
        <script type="text/javascript" src="../assets/vendor/jquery/dist/jquery.min.js"></script>

        <!-- Mobile Detect -->
        <script type="text/javascript" src="../assets/vendor/mobile-detect/mobile-detect.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script type="text/javascript"
                src="../assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>

        <!-- Popper.js -->
        <script type="text/javascript" src="../assets/vendor/popper.js/index.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="../assets/vendor/bootstrap/bootstrap.min.js"></script>

        <!-- Nvd3 - D3 Charts -->
        <script type="text/javascript" src="../assets/vendor/d3/d3.min.js"></script>
        <script type="text/javascript" src="../assets/vendor/nvd3/build/nv.d3.min.js"></script>

        <!-- Data tables -->
        <script type="text/javascript" src="../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>

        <script type="text/javascript"
                src="../assets/vendor/datatables-responsive/js/dataTables.responsive.js"></script>

        <!-- PNotify -->
        <script type="text/javascript" src="../assets/vendor/pnotify/pnotify.custom.min.js"></script>

        <!-- Fuse Html -->
        <script type="text/javascript" src="../assets/vendor/fuse-html/fuse-html.min.js"></script>

        <!-- Main JS -->
        <script type="text/javascript" src="../assets/js/main.js"></script>

        <!-- / JAVASCRIPT -->
    </head>

    <body class="layout layout-vertical layout-left-navigation layout-above-toolbar">

        <nav id="toolbar" class="fixed-top bg-white">

            <div class="row no-gutters align-items-center flex-nowrap">

                <div class="col">

                    <div class="row no-gutters align-items-center flex-nowrap">

                        <button type="button" class="toggle-aside-button btn btn-icon d-block d-lg-none"
                                data-fuse-bar-toggle="aside">
                            <i class="icon icon-menu"></i>
                        </button>

                        <div class="toolbar-separator d-block d-lg-none"></div>

                        <div class="shortcuts-wrapper row no-gutters align-items-center px-0 px-sm-2">

                            <div class="shortcuts row no-gutters align-items-center d-none d-md-flex">

                                <a href="apps-chat.html" class="shortcut-button btn btn-icon mx-1">
                                    <i class="icon icon-hangouts"></i>
                                </a>

                                <a href="apps-contacts.html" class="shortcut-button btn btn-icon mx-1">
                                    <i class="icon icon-account-box"></i>
                                </a>

                                <a href="apps-mail.html" class="shortcut-button btn btn-icon mx-1">
                                    <i class="icon icon-email"></i>
                                </a>

                            </div>

                            <div class="add-shortcut-menu-button dropdown px-1 px-sm-3">

                                <div class="dropdown-toggle btn btn-icon" role="button"
                                     id="dropdownShortcutMenu"
                                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon icon-star text-amber-600"></i>
                                </div>

                                <div class="dropdown-menu" aria-labelledby="dropdownShortcutMenu">

                                    <a class="dropdown-item" href="#">
                                        <div
                                            class="row no-gutters align-items-center justify-content-between flex-nowrap">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="icon icon-calendar-today"></i>
                                                <span class="px-3">Calendar</span>
                                            </div>
                                            <i class="icon icon-pin s-5 ml-2"></i>
                                        </div>
                                    </a>

                                    <a class="dropdown-item" href="#">
                                        <div
                                            class="row no-gutters align-items-center justify-content-between flex-nowrap">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="icon icon-folder"></i>
                                                <span class="px-3">File Manager</span>
                                            </div>
                                            <i class="icon icon-pin s-5 ml-2"></i>
                                        </div>
                                    </a>

                                    <a class="dropdown-item" href="#">
                                        <div
                                            class="row no-gutters align-items-center justify-content-between flex-nowrap">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="icon icon-checkbox-marked"></i>
                                                <span class="px-3">To-Do</span>
                                            </div>
                                            <i class="icon icon-pin s-5 ml-2"></i>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="toolbar-separator"></div>

                    </div>
                </div>

                <div class="col-auto">

                    <div class="row no-gutters align-items-center justify-content-end">

                        <div class="user-menu-button dropdown">

                            <div class="dropdown-toggle ripple row align-items-center no-gutters px-2 px-sm-4"
                                 role="button"
                                 id="dropdownUserMenu"
                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar-wrapper">
                                    <img class="avatar" src="../assets/images/avatars/profile.jpg">
                                    <i class="status text-green icon-checkbox-marked-circle s-4"></i>
                                </div>
                                <span class="username mx-3 d-none d-md-block">John Doe</span>
                            </div>

                            <div class="dropdown-menu" aria-labelledby="dropdownUserMenu">

                                <a class="dropdown-item" href="#">
                                    <div class="row no-gutters align-items-center flex-nowrap">
                                        <i class="icon-account"></i>
                                        <span class="px-3">My Profile</span>
                                    </div>
                                </a>

                                <a class="dropdown-item" href="#">
                                    <div class="row no-gutters align-items-center flex-nowrap">
                                        <i class="icon-email"></i>
                                        <span class="px-3">Inbox</span>
                                    </div>
                                </a>

                                <a class="dropdown-item" href="#">
                                    <div class="row no-gutters align-items-center flex-nowrap">
                                        <i class="status text-green icon-checkbox-marked-circle"></i>
                                        <span class="px-3">Online</span>
                                    </div>
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="#">
                                    <div class="row no-gutters align-items-center flex-nowrap">
                                        <i class="icon-logout"></i>
                                        <span class="px-3">Logout</span>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <div class="toolbar-separator"></div>

                        <button type="button" class="search-button btn btn-icon">
                            <i class="icon icon-magnify"></i>
                        </button>

                        <div class="toolbar-separator"></div>

                        <div class="language-button dropdown">

                            <div
                                class="dropdown-toggle ripple row align-items-center justify-content-center no-gutters px-0 px-sm-4"
                                role="button"
                                id="dropdownLanguageMenu"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="row no-gutters align-items-center">
                                    <img class="flag mr-2" src="../assets/images/flags/us.png">
                                    <span class="d-none d-md-block">EN</span>
                                </div>
                            </div>

                            <div class="dropdown-menu" aria-labelledby="dropdownLanguageMenu">

                                <a class="dropdown-item" href="#">
                                    <div class="row no-gutters align-items-center flex-nowrap">
                                        <img class="flag" src="../assets/images/flags/us.png">
                                        <span class="px-3">English</span>
                                    </div>
                                </a>

                                <a class="dropdown-item" href="#">
                                    <div class="row no-gutters align-items-center flex-nowrap">
                                        <img class="flag" src="../assets/images/flags/es.png">
                                        <span class="px-3">Spanish</span>
                                    </div>
                                </a>

                                <a class="dropdown-item" href="#">
                                    <div class="row no-gutters align-items-center flex-nowrap">
                                        <img class="flag" src="../assets/images/flags/tr.png">
                                        <span class="px-3">Turkish</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="toolbar-separator"></div>

                        <button type="button" class="quick-panel-button btn btn-icon"
                                data-fuse-bar-toggle="quick-panel-sidebar">
                            <i class="icon icon-format-list-bulleted"></i>
                        </button>

                    </div>
                </div>
            </div>
        </nav>

        <div id="wrapper">

            <aside id="aside" class="aside aside-left"
                   data-fuse-bar="aside" data-fuse-bar-media-step="md"
                   data-fuse-bar-position="left">
                <div class="aside-content-wrapper">

                    <div class="aside-content">

                        <div class="aside-toolbar">

                            <div class="logo">
                                <span class="logo-icon">F</span><span class="logo-text">FUSE</span>
                            </div>

                            <button id="toggle-fold-aside-button" type="button" class="btn btn-icon d-none d-lg-block"
                                    data-fuse-aside-toggle-fold>
                                <i class="icon icon-backburger"></i>
                            </button>

                        </div>

                        <ul class="nav flex-column custom-scrollbar" id="sidenav" data-children=".nav-item">

                            <li class="subheader">
                                <span>APPS</span>
                            </li>

                            <li class="nav-item" role="tab" id="heading-dashboards">

                                <a class="nav-link ripple with-arrow collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapse-dashboards"
                                   href="#"
                                   aria-expanded="false"
                                   aria-controls="collapse-dashboards">
                                    <i class="icon s-4 icon-tile-four"></i>
                                    <span>Dashboards</span>
                                </a>

                                <ul id="collapse-dashboards"
                                    class="collapse"
                                    role="tabpanel"
                                    aria-labelledby="heading-dashboards"
                                    data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-dashboards-project.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Project Dashboard</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-dashboards-server.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Server</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-calendar.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-calendar-today"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>

                            <li class="nav-item" role="tab" id="heading-ecommerce">

                                <a class="nav-link ripple with-arrow collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapse-ecommerce"
                                   href="#"
                                   aria-expanded="false"
                                   aria-controls="collapse-ecommerce">
                                    <i class="icon s-4 icon-cart"></i>
                                    <span>Ecommerce</span>
                                </a>

                                <ul id="collapse-ecommerce"
                                    class="collapse"
                                    role="tabpanel"
                                    aria-labelledby="heading-ecommerce"
                                    data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-e-commerce-products.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Products</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-e-commerce-product.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Product</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-e-commerce-orders.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Orders</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple active" href="apps-mail.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-email"></i>
                                    <span>Mail</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-chat.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-hangouts"></i>
                                    <span>Chat</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-file-manager.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-folder"></i>
                                    <span>File Manager</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-contacts.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-account-box"></i>
                                    <span>Contacts</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-todo.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-checkbox-marked"></i>
                                    <span>To-Do</span>
                                </a>
                            </li>

                            <li class="subheader">
                                <span>PAGES</span>
                            </li>

                            <li class="nav-item" role="tab" id="heading-authentication">

                                <a class="nav-link ripple with-arrow collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapse-authentication"
                                   href="#"
                                   aria-expanded="false"
                                   aria-controls="collapse-authentication">
                                    <i class="icon s-4 icon-lock"></i>
                                    <span>Authentication</span>
                                </a>

                                <ul id="collapse-authentication"
                                    class="collapse"
                                    role="tabpanel"
                                    aria-labelledby="heading-authentication"
                                    data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-login.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Login</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-login-v2.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Login v2</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-register.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Register</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-register-v2.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Register v2</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-forgot-password.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Forgot Password</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-reset-password.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Reset Password</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-lock-screen.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Lock Screen</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="pages-coming-soon.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-alarm-check"></i>
                                    <span>Coming Soon</span>
                                </a>
                            </li>

                            <li class="nav-item" role="tab" id="heading-errors">

                                <a class="nav-link ripple with-arrow collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapse-errors"
                                   href="#"
                                   aria-expanded="false"
                                   aria-controls="collapse-errors">
                                    <i class="icon s-4 icon-alert"></i>
                                    <span>Errors</span>
                                </a>

                                <ul id="collapse-errors"
                                    class="collapse"
                                    role="tabpanel"
                                    aria-labelledby="heading-errors"
                                    data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-errors-404.html"
                                           data-page-url="/apps-mail.html">

                                            <span>404</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-errors-500.html"
                                           data-page-url="/apps-mail.html">

                                            <span>500</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="pages-maintenance.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-oil"></i>
                                    <span>Maintenance</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="pages-profile.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-account"></i>
                                    <span>Profile</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="pages-search.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-magnify"></i>
                                    <span>Search</span>
                                </a>
                            </li>

                            <li class="subheader">
                                <span>USER INTERFACE</span>
                            </li>

                            <li class="nav-item" role="tab" id="heading-elements">

                                <a class="nav-link ripple with-arrow collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapse-elements"
                                   href="#"
                                   aria-expanded="false"
                                   aria-controls="collapse-elements">
                                    <i class="icon s-4 icon-layers"></i>
                                    <span>Elements</span>
                                </a>

                                <ul id="collapse-elements"
                                    class="collapse"
                                    role="tabpanel"
                                    aria-labelledby="heading-elements"
                                    data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-alerts.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Alerts</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-badges.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Badges</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-breadcrumb.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Breadcrumb</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-buttons.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Buttons</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-button-group.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Button Group</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-cards.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Cards</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-dropdowns.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Dropdowns</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-forms.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Forms</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-input-group.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Input Group</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-jumbotron.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Jumbotron</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-list-group.html"
                                           data-page-url="/apps-mail.html">

                                            <span>List Group</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-navs.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Navs</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-navbar.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Navbar</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-pagination.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Pagination</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-progress.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Progress</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item" role="tab" id="heading-tables">

                                <a class="nav-link ripple with-arrow collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapse-tables"
                                   href="#"
                                   aria-expanded="false"
                                   aria-controls="collapse-tables">
                                    <i class="icon s-4 icon-table-large"></i>
                                    <span>Tables</span>
                                </a>

                                <ul id="collapse-tables"
                                    class="collapse"
                                    role="tabpanel"
                                    aria-labelledby="heading-tables"
                                    data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-tables-simple-table.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Simple Table</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-tables-data-table.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Data Table</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item" role="tab" id="heading-page-layouts">

                                <a class="nav-link ripple with-arrow collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapse-page-layouts"
                                   href="#"
                                   aria-expanded="false"
                                   aria-controls="collapse-page-layouts">
                                    <i class="icon s-4 icon-view-quilt"></i>
                                    <span>Page Layouts</span>
                                </a>

                                <ul id="collapse-page-layouts"
                                    class="collapse"
                                    role="tabpanel"
                                    aria-labelledby="heading-page-layouts"
                                    data-children=".nav-item">

                                    <li class="nav-item" role="tab" id="heading-carded">

                                        <a class="nav-link ripple with-arrow collapsed"
                                           data-toggle="collapse"
                                           data-target="#collapse-carded"
                                           href="#"
                                           aria-expanded="false"
                                           aria-controls="collapse-carded">

                                            <span>Carded</span>
                                        </a>

                                        <ul id="collapse-carded"
                                            class="collapse"
                                            role="tabpanel"
                                            aria-labelledby="heading-carded"
                                            data-children=".nav-item">

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-carded-full-width.html"
                                                   data-page-url="/apps-mail.html">

                                                    <span>Full Width</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-carded-left-sidebar.html"
                                                   data-page-url="/apps-mail.html">

                                                    <span>Left Sidebar</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-carded-right-sidebar.html"
                                                   data-page-url="/apps-mail.html">

                                                    <span>Right Sidebar</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="nav-item" role="tab" id="heading-simple">

                                        <a class="nav-link ripple with-arrow collapsed"
                                           data-toggle="collapse"
                                           data-target="#collapse-simple"
                                           href="#"
                                           aria-expanded="false"
                                           aria-controls="collapse-simple">

                                            <span>Simple</span>
                                        </a>

                                        <ul id="collapse-simple"
                                            class="collapse"
                                            role="tabpanel"
                                            aria-labelledby="heading-simple"
                                            data-children=".nav-item">

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-full-width.html"
                                                   data-page-url="/apps-mail.html">

                                                    <span>Full Width</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-left-sidebar.html"
                                                   data-page-url="/apps-mail.html">

                                                    <span>Left Sidebar</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-left-sidebar-inner.html"
                                                   data-page-url="/apps-mail.html">

                                                    <span>Left Sidebar Inner</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-left-sidebar-floating.html"
                                                   data-page-url="/apps-mail.html">

                                                    <span>Left Sidebar Floating</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-right-sidebar.html"
                                                   data-page-url="/apps-mail.html">

                                                    <span>Right Sidebar</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-right-sidebar-inner.html"
                                                   data-page-url="/apps-mail.html">

                                                    <span>Right Sidebar Inner</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-right-sidebar-floating.html"
                                                   data-page-url="/apps-mail.html">

                                                    <span>Right Sidebar Floating</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-tabbed.html"
                                                   data-page-url="/apps-mail.html">

                                                    <span>Tabbed</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-page-layouts-blank.html"
                                           data-page-url="/apps-mail.html">

                                            <span>Blank</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="user-interface-colors.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-palette"></i>
                                    <span>Colors</span>
                                </a>
                            </li>

                            <li class="subheader">
                                <span>COMPONENTS</span>
                            </li>

                            <li class="nav-item" role="tab" id="heading-charts">

                                <a class="nav-link ripple with-arrow collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapse-charts"
                                   href="#"
                                   aria-expanded="false"
                                   aria-controls="collapse-charts">
                                    <i class="icon s-4 icon-poll"></i>
                                    <span>Charts</span>
                                </a>

                                <ul id="collapse-charts"
                                    class="collapse"
                                    role="tabpanel"
                                    aria-labelledby="heading-charts"
                                    data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="components-charts-nvd3.html"
                                           data-page-url="/apps-mail.html">

                                            <span>nvD3</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-collapse.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-plus-box"></i>
                                    <span>Collapse</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-modal.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-window-maximize"></i>
                                    <span>Modal</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-popovers.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-tooltip-outline"></i>
                                    <span>Popovers</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-snackbar.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-page-layout-footer"></i>
                                    <span>Snackbar</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-tooltips.html"
                                   data-page-url="/apps-mail.html">
                                    <i class="icon s-4 icon-tooltip"></i>
                                    <span>Tooltips</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </aside>

            <div class="content-wrapper">

                <div class="content">
                    <div id="mail" class="page-layout carded left-sidebar">

                        <div class="top-bg bg-primary"></div>

                        <div class="page-content-wrapper">

                            <aside class="page-sidebar" data-fuse-bar="mail-sidebar" data-fuse-bar-media-step="md">
                                <!-- HEADER -->
                                <div class="header d-flex flex-column justify-content-between p-6 bg-primary text-auto">

                                    <div class="logo d-flex align-items-center pt-7">
                                        <i class="icon-email mr-4"></i>
                                        <span class="logo-text h4">Mailbox</span>
                                    </div>

                                    <div class="account">
                                        <div class="title">John Doe</div>
                                    </div>

                                </div>
                                <!-- / HEADER -->

                                <div>

                                    <div class="p-6">
                                        <button type="button" class="btn btn-primary btn-block">COMPOSE</button>
                                    </div>

                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                            <a class="nav-link ripple" href="#">
                                                <i class="icon s-4 icon-inbox"></i>
                                                <span>Inbox</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link ripple" href="#">
                                                <i class="icon s-4 icon-send"></i>
                                                <span>Sent</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link ripple" href="#">
                                                <i class="icon s-4 icon-email-open"></i>
                                                <span>Drafts</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link ripple" href="#">
                                                <i class="icon s-4 icon-delete"></i>
                                                <span>Trash</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link ripple" href="#">
                                                <i class="icon s-4 icon-alert-octagon"></i>
                                                <span>Spam</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link ripple" href="#">
                                                <i class="icon s-4 icon-star"></i>
                                                <span>Starred</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link ripple" href="#">
                                                <i class="icon s-4 icon-label"></i>
                                                <span>Important</span>
                                            </a>
                                        </li>

                                        <li class="subheader">
                                            Labels
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link ripple" href="#">
                                                <i class="icon s-4 icon-label"></i>
                                                <span>Notes</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link ripple" href="#">
                                                <i class="icon s-4 icon-label"></i>
                                                <span>Paypal</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link ripple" href="#">
                                                <i class="icon s-4 icon-label"></i>
                                                <span>Invoices</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link ripple" href="#">
                                                <i class="icon s-4 icon-label"></i>
                                                <span>Amazon</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </aside>

                            <!-- CONTENT -->
                            <div class="page-content">
                                <!-- HEADER -->
                                <div class="header d-flex flex-column justify-content-center bg-primary text-auto">

                                    <div class="search-bar row align-items-center no-gutters bg-white text-auto">

                                        <button type="button"
                                                class="sidebar-toggle-button btn btn-icon d-block d-lg-none"
                                                data-fuse-bar-toggle="mail-sidebar">
                                            <i class="icon icon-menu"></i>
                                        </button>

                                        <i class="icon-magnify s-6 mx-4"></i>

                                        <input class="search-bar-input col" type="text"
                                               placeholder="Search for an e-mail or contact">

                                    </div>
                                </div>
                                <!-- / HEADER -->

                                <div class="page-content-card">

                                    <!-- CONTENT TOOLBAR -->
                                    <div class="toolbar row no-gutters align-items-center p-4 p-sm-6">

                                        <div class="col">

                                            <div class="row no-gutters align-items-center">

                                                <div class="col-auto">

                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"/>
                                                        <span class="custom-control-indicator"></span>
                                                    </label>

                                                </div>

                                                <div class="action-buttons col">

                                                    <div
                                                        class="row no-gutters align-items-center flex-nowrap d-none d-xl-flex">

                                                        <div class="divider-vertical"></div>

                                                        <button type="button" class="btn btn-icon" aria-label="archive">
                                                            <i class="icon icon-archive"></i>
                                                        </button>

                                                        <button type="button" class="btn btn-icon" aria-label="spam">
                                                            <i class="icon icon-alert-octagon"></i>
                                                        </button>

                                                        <button type="button" class="btn btn-icon" aria-label="delete">
                                                            <i class="icon icon-delete"></i>
                                                        </button>

                                                        <div class="divider-vertical"></div>

                                                        <button type="button" class="btn btn-icon" aria-label="move to">
                                                            <i class="icon icon-folder"></i>
                                                        </button>

                                                        <button type="button" class="btn btn-icon" aria-label="labels">
                                                            <i class="icon icon-label"></i>
                                                        </button>

                                                        <button type="button" class="btn btn-icon" aria-label="move to">
                                                            <i class="icon icon-folder"></i>
                                                        </button>

                                                        <div class="divider-vertical"></div>

                                                        <button type="button" class="btn btn-icon" aria-label="more">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto">

                                            <div class="row no-gutters align-items-center">

                                                <span class="page-info px-2 d-none d-sm-block">1 - 100 of 980</span>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-chevron-left"></i>
                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-chevron-right"></i>
                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-settings"></i>
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- / CONTENT TOOLBAR -->

                                    <div class="thread-list">

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 unread">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <img class="avatar mr-2" alt="Alice Freeman"
                                                         src="../assets/images/avatars/alice.jpg"/>

                                                    <span class="">Alice Freeman</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                        <div class="label badge badge-default"
                                                             style="background-color:#607D8B;">
                                                            paypal
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">28 Jun</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 unread">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <img class="avatar mr-2" alt="Lawrence Collins"
                                                         src="../assets/images/avatars/vincent.jpg"/>

                                                    <span class="">Lawrence Collins</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">28 Jun</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label-outline"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 ">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <img class="avatar mr-2" alt="Judith Burton"
                                                         src="../assets/images/avatars/joyce.jpg"/>

                                                    <span class="">Judith Burton</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                        <div class="label badge badge-default"
                                                             style="background-color:#2196F3;">
                                                            amazon
                                                        </div>

                                                        <div class="label badge badge-default"
                                                             style="background-color:#EF6C00;">
                                                            invoices
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">28 Jun</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label-outline"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 ">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <img class="avatar mr-2" alt="Danielle Obrien"
                                                         src="../assets/images/avatars/danielle.jpg"/>

                                                    <span class="">Danielle Obrien</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                        <div class="label badge badge-default"
                                                             style="background-color:#2196F3;">
                                                            amazon
                                                        </div>

                                                        <div class="label badge badge-default"
                                                             style="background-color:#E91E63;">
                                                            invoices
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">28 Jun</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label-outline"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 ">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <div class="avatar mr-2">
                                                        B
                                                    </div>

                                                    <span class="">Brian Flores</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">26 Jun</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label-outline"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 ">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <img class="avatar mr-2" alt="Charles Kim"
                                                         src="../assets/images/avatars/garry.jpg"/>

                                                    <span class="">Charles Kim</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                        <div class="label badge badge-default"
                                                             style="background-color:#EF6C00;">
                                                            invoices
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">18 Jun</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 ">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <div class="avatar mr-2">
                                                        P
                                                    </div>

                                                    <span class="">Patricia White</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">15 Jun</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label-outline"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 ">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <img class="avatar mr-2" alt="Juan Carpenter"
                                                         src="../assets/images/avatars/james.jpg"/>

                                                    <span class="">Juan Carpenter</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">11 Jun</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label-outline"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 ">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <img class="avatar mr-2" alt="Maria Gilbert"
                                                         src="../assets/images/avatars/danielle.jpg"/>

                                                    <span class="">Maria Gilbert</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">5 Jun</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label-outline"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 ">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <div class="avatar mr-2">
                                                        T
                                                    </div>

                                                    <span class="">Tammy Brooks</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">1 Jun</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label-outline"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 ">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <div class="avatar mr-2">
                                                        K
                                                    </div>

                                                    <span class="">Kathy Price</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">1 Jun</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label-outline"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 ">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <div class="avatar mr-2">
                                                        A
                                                    </div>

                                                    <span class="">Alan Coleman</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">28 June</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label-outline"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 ">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <div class="avatar mr-2">
                                                        T
                                                    </div>

                                                    <span class="">Thomas Silva</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">16 Jun</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label-outline"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 ">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <div class="avatar mr-2">
                                                        J
                                                    </div>

                                                    <span class="">Jessica Robertson</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">19 May</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label-outline"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 ">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <div class="avatar mr-2">
                                                        J
                                                    </div>

                                                    <span class="">John Palmer</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">8 May</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label-outline"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 ">

                                            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                                            <div class="info col px-4">

                                                <div class="name row no-gutters align-items-center">

                                                    <div class="avatar mr-2">
                                                        D
                                                    </div>

                                                    <span class="">David Butler</span>

                                                    <i class="icon-paperclip has-attachment s-4"></i>

                                                </div>

                                                <div class="subject">
                                                    Commits that need to be pushed lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                </div>

                                                <div class="message">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                        lorem diam,...

                                                    <div class="labels">

                                                    </div>

                                                </div>

                                            </div>

                                            <div
                                                class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                                <div class="time mb-2">7 May</div>

                                                <div class="actions row no-gutters">

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                                                    <button type="button" class="btn btn-icon">

                                                        <i class="icon-label-outline"></i>

                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- / CONTENT -->

                        </div>
                    </div>
                </div>

            </div>

            <div class="quick-panel-sidebar" fuse-cloak data-fuse-bar="quick-panel-sidebar"
                 data-fuse-bar-position="right">
                <div class="list-group" class="date">

                    <div class="list-group-item subheader">TODAY</div>

                    <div class="list-group-item two-line">

                        <div class="text-muted">

                            <div class="h1"> Monday</div>

                            <div class="h2 row no-gutters align-items-start">
                                <span> 12</span>
                                <span class="h6">th</span>
                                <span> Jun</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="list-group">

                    <div class="list-group-item subheader">Events</div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Group Meeting</h3>

                            <p>In 32 Minutes, Room 1B</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Public Beta Release</h3>

                            <p>11:00 PM</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Dinner with David</h3>

                            <p>17:30 PM</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Q&A Session</h3>

                            <p>20:30 PM</p>
                        </div>

                    </div>

                </div>

                <div class="divider"></div>

                <div class="list-group">

                    <div class="list-group-item subheader">Notes</div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Best songs to listen while working</h3>

                            <p>Last edit: May 8th, 2015</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Useful subreddits</h3>

                            <p>Last edit: January 12th, 2015</p>
                        </div>

                    </div>

                </div>

                <div class="divider"></div>

                <div class="list-group">

                    <div class="list-group-item subheader">Quick Settings</div>

                    <div class="list-group-item">

                        <div class="list-item-content">
                            <h3>Notifications</h3>
                        </div>

                        <div class="secondary-container">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"/>
                                <span class="custom-control-indicator"></span>
                            </label>
                        </div>

                    </div>

                    <div class="list-group-item">

                        <div class="list-item-content">
                            <h3>Cloud Sync</h3>
                        </div>

                        <div class="secondary-container">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"/>
                                <span class="custom-control-indicator"></span>
                            </label>
                        </div>

                    </div>

                    <div class="list-group-item">

                        <div class="list-item-content">
                            <h3>Retro Thrusters</h3>
                        </div>

                        <div class="secondary-container">

                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"/>
                                <span class="custom-control-indicator"></span>
                            </label>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>