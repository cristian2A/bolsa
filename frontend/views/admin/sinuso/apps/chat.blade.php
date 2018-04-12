<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Chat</title>

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
                                           data-page-url="/apps-chat.html">

                                            <span>Project Dashboard</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-dashboards-server.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Server</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-calendar.html"
                                   data-page-url="/apps-chat.html">
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
                                           data-page-url="/apps-chat.html">

                                            <span>Products</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-e-commerce-product.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Product</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-e-commerce-orders.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Orders</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-mail.html"
                                   data-page-url="/apps-chat.html">
                                    <i class="icon s-4 icon-email"></i>
                                    <span>Mail</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple active" href="apps-chat.html"
                                   data-page-url="/apps-chat.html">
                                    <i class="icon s-4 icon-hangouts"></i>
                                    <span>Chat</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-file-manager.html"
                                   data-page-url="/apps-chat.html">
                                    <i class="icon s-4 icon-folder"></i>
                                    <span>File Manager</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-contacts.html"
                                   data-page-url="/apps-chat.html">
                                    <i class="icon s-4 icon-account-box"></i>
                                    <span>Contacts</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-todo.html"
                                   data-page-url="/apps-chat.html">
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
                                           data-page-url="/apps-chat.html">

                                            <span>Login</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-login-v2.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Login v2</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-register.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Register</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-register-v2.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Register v2</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-forgot-password.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Forgot Password</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-reset-password.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Reset Password</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-lock-screen.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Lock Screen</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="pages-coming-soon.html"
                                   data-page-url="/apps-chat.html">
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
                                           data-page-url="/apps-chat.html">

                                            <span>404</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-errors-500.html"
                                           data-page-url="/apps-chat.html">

                                            <span>500</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="pages-maintenance.html"
                                   data-page-url="/apps-chat.html">
                                    <i class="icon s-4 icon-oil"></i>
                                    <span>Maintenance</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="pages-profile.html"
                                   data-page-url="/apps-chat.html">
                                    <i class="icon s-4 icon-account"></i>
                                    <span>Profile</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="pages-search.html"
                                   data-page-url="/apps-chat.html">
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
                                           data-page-url="/apps-chat.html">

                                            <span>Alerts</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-badges.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Badges</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-breadcrumb.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Breadcrumb</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-buttons.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Buttons</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-button-group.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Button Group</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-cards.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Cards</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-dropdowns.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Dropdowns</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-forms.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Forms</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-input-group.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Input Group</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-jumbotron.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Jumbotron</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-list-group.html"
                                           data-page-url="/apps-chat.html">

                                            <span>List Group</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-navs.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Navs</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-navbar.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Navbar</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-pagination.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Pagination</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-progress.html"
                                           data-page-url="/apps-chat.html">

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
                                           data-page-url="/apps-chat.html">

                                            <span>Simple Table</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-tables-data-table.html"
                                           data-page-url="/apps-chat.html">

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
                                                   data-page-url="/apps-chat.html">

                                                    <span>Full Width</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-carded-left-sidebar.html"
                                                   data-page-url="/apps-chat.html">

                                                    <span>Left Sidebar</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-carded-right-sidebar.html"
                                                   data-page-url="/apps-chat.html">

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
                                                   data-page-url="/apps-chat.html">

                                                    <span>Full Width</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-left-sidebar.html"
                                                   data-page-url="/apps-chat.html">

                                                    <span>Left Sidebar</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-left-sidebar-inner.html"
                                                   data-page-url="/apps-chat.html">

                                                    <span>Left Sidebar Inner</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-left-sidebar-floating.html"
                                                   data-page-url="/apps-chat.html">

                                                    <span>Left Sidebar Floating</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-right-sidebar.html"
                                                   data-page-url="/apps-chat.html">

                                                    <span>Right Sidebar</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-right-sidebar-inner.html"
                                                   data-page-url="/apps-chat.html">

                                                    <span>Right Sidebar Inner</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-right-sidebar-floating.html"
                                                   data-page-url="/apps-chat.html">

                                                    <span>Right Sidebar Floating</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-tabbed.html"
                                                   data-page-url="/apps-chat.html">

                                                    <span>Tabbed</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-page-layouts-blank.html"
                                           data-page-url="/apps-chat.html">

                                            <span>Blank</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="user-interface-colors.html"
                                   data-page-url="/apps-chat.html">
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
                                           data-page-url="/apps-chat.html">

                                            <span>nvD3</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-collapse.html"
                                   data-page-url="/apps-chat.html">
                                    <i class="icon s-4 icon-plus-box"></i>
                                    <span>Collapse</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-modal.html"
                                   data-page-url="/apps-chat.html">
                                    <i class="icon s-4 icon-window-maximize"></i>
                                    <span>Modal</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-popovers.html"
                                   data-page-url="/apps-chat.html">
                                    <i class="icon s-4 icon-tooltip-outline"></i>
                                    <span>Popovers</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-snackbar.html"
                                   data-page-url="/apps-chat.html">
                                    <i class="icon s-4 icon-page-layout-footer"></i>
                                    <span>Snackbar</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-tooltips.html"
                                   data-page-url="/apps-chat.html">
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
                    <div id="chat" class="page-layout carded full-width">

                        <div class="top-bg bg-primary"></div>

                        <!-- CONTENT -->
                        <div class="page-content w-100 mx-auto px-0 pt-0 px-sm-4 pt-sm-8">

                            <div class="page-content-card row no-gutters">

                                <aside class="left-sidebar" data-fuse-bar="chat-left-sidebar"
                                       data-fuse-bar-media-step="lg">

                                    <div id="chat-left-sidebar-views" class="views">

                                        <div id="chats-view" class="view d-flex flex-column no-gutters">
                                            <!-- CHATS TOOLBAR -->
                                            <div class="toolbar">

                                                <!-- TOOLBAR TOP -->
                                                <div
                                                    class="toolbar-top row no-gutters align-items-center justify-content-between px-4">

                                                    <!-- USER AVATAR WRAPPER -->
                                                    <div class="avatar-wrapper">

                                                        <!-- USER AVATAR -->
                                                        <img id="user-avatar-button"
                                                             src="../assets/images/avatars/profile.jpg" class="avatar"
                                                             alt="John Doe"/>
                                                        <!-- / USER AVATAR -->

                                                        <!-- USER STATUS -->
                                                        <i class="icon- status online s-4"></i>
                                                        <!-- / USER STATUS -->

                                                    </div>
                                                    <!-- / USER AVATAR -->

                                                    <button type="button" class="btn btn-icon">
                                                        <i class="icon icon-dots-vertical"></i>
                                                    </button>
                                                </div>
                                                <!-- / TOOLBAR TOP -->

                                                <!-- TOOLBAR BOTTOM -->
                                                <div class="toolbar-bottom row align-items-center no-gutters px-4">

                                                    <!-- SEARCH -->
                                                    <div
                                                        class="search-wrapper md-elevation-1 row no-gutters align-items-center w-100 p-2">
                                                        <i class="icon-magnify s-4"></i>
                                                        <input class="col pl-2" type="text"
                                                               placeholder="Search or start new chat">
                                                    </div>
                                                    <!-- / SEARCH -->
                                                </div>
                                                <!-- / TOOLBAR BOTTOM -->

                                            </div>
                                            <!-- / CHATS TOOLBAR -->

                                            <!-- CHATS CONTENT -->
                                            <div class="content col custom-scrollbar">

                                                <!-- CHATS LIST-->
                                                <div class="chat-list">

                                                    <div
                                                        class="contact ripple flex-wrap flex-sm-nowrap row p-4 no-gutters align-items-center unread">

                                                        <div class="col-auto avatar-wrapper">
                                                            <img src="../assets/images/avatars/Barrera.jpg"
                                                                 class="avatar" alt="Barrera"/>
                                                            <i class="icon- status do-not-disturb s-4"></i>
                                                        </div>

                                                        <div class="col px-4">
                                                            <span class="name h6">Barrera</span>
                                                            <p class="last-message text-truncate text-muted">pariatur
                                                                commodo sunt nulla</p>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-auto d-flex flex-column align-items-end">
                                                            <div class="last-message-time">18/03/16</div>

                                                            <div class="bg-primary text-auto unread-message-count mt-2">
                                                                4
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="divider"></div>

                                                    <div
                                                        class="contact ripple flex-wrap flex-sm-nowrap row p-4 no-gutters align-items-center unread">

                                                        <div class="col-auto avatar-wrapper">
                                                            <img src="../assets/images/avatars/Blair.jpg" class="avatar"
                                                                 alt="Blair"/>
                                                            <i class="icon- status offline s-4"></i>
                                                        </div>

                                                        <div class="col px-4">
                                                            <span class="name h6">Blair</span>
                                                            <p class="last-message text-truncate text-muted">mollit
                                                                excepteur sit</p>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-auto d-flex flex-column align-items-end">
                                                            <div class="last-message-time">01/05/16</div>

                                                            <div class="bg-primary text-auto unread-message-count mt-2">
                                                                3
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="divider"></div>

                                                    <div
                                                        class="contact ripple flex-wrap flex-sm-nowrap row p-4 no-gutters align-items-center ">

                                                        <div class="col-auto avatar-wrapper">
                                                            <img src="../assets/images/avatars/Christy.jpg"
                                                                 class="avatar" alt="Christy"/>
                                                            <i class="icon- status offline s-4"></i>
                                                        </div>

                                                        <div class="col px-4">
                                                            <span class="name h6">Christy</span>
                                                            <p class="last-message text-truncate text-muted">laboris
                                                                ex</p>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-auto d-flex flex-column align-items-end">
                                                            <div class="last-message-time">29/03/16</div>

                                                        </div>
                                                    </div>

                                                    <div class="divider"></div>

                                                    <div
                                                        class="contact ripple flex-wrap flex-sm-nowrap row p-4 no-gutters align-items-center ">

                                                        <div class="col-auto avatar-wrapper">
                                                            <img src="../assets/images/avatars/Copeland.jpg"
                                                                 class="avatar" alt="Copeland"/>
                                                            <i class="icon- status online s-4"></i>
                                                        </div>

                                                        <div class="col px-4">
                                                            <span class="name h6">Copeland</span>
                                                            <p class="last-message text-truncate text-muted">adipisicing
                                                                sit</p>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-auto d-flex flex-column align-items-end">
                                                            <div class="last-message-time">25/04/16</div>

                                                        </div>
                                                    </div>

                                                    <div class="divider"></div>

                                                    <div
                                                        class="contact ripple flex-wrap flex-sm-nowrap row p-4 no-gutters align-items-center ">

                                                        <div class="col-auto avatar-wrapper">
                                                            <img src="../assets/images/avatars/Harper.jpg"
                                                                 class="avatar" alt="Harper"/>
                                                            <i class="icon- status offline s-4"></i>
                                                        </div>

                                                        <div class="col px-4">
                                                            <span class="name h6">Harper</span>
                                                            <p class="last-message text-truncate text-muted">non dolore
                                                                Lorem</p>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-auto d-flex flex-column align-items-end">
                                                            <div class="last-message-time">27/04/16</div>

                                                        </div>
                                                    </div>

                                                    <div class="divider"></div>

                                                    <div
                                                        class="contact ripple flex-wrap flex-sm-nowrap row p-4 no-gutters align-items-center ">

                                                        <div class="col-auto avatar-wrapper">
                                                            <img src="../assets/images/avatars/Odessa.jpg"
                                                                 class="avatar" alt="Odessa"/>
                                                            <i class="icon- status away s-4"></i>
                                                        </div>

                                                        <div class="col px-4">
                                                            <span class="name h6">Odessa</span>
                                                            <p class="last-message text-truncate text-muted">aliqua
                                                                officia esse commodo</p>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-auto d-flex flex-column align-items-end">
                                                            <div class="last-message-time">28/04/16</div>

                                                        </div>
                                                    </div>

                                                    <div class="divider"></div>

                                                    <div
                                                        class="contact ripple flex-wrap flex-sm-nowrap row p-4 no-gutters align-items-center ">

                                                        <div class="col-auto avatar-wrapper">
                                                            <img src="../assets/images/avatars/Shauna.jpg"
                                                                 class="avatar" alt="Shauna"/>
                                                            <i class="icon- status online s-4"></i>
                                                        </div>

                                                        <div class="col px-4">
                                                            <span class="name h6">Shauna</span>
                                                            <p class="last-message text-truncate text-muted">nulla sunt
                                                                minim elit ullamco</p>
                                                        </div>

                                                        <div
                                                            class="col-12 col-sm-auto d-flex flex-column align-items-end">
                                                            <div class="last-message-time">01/05/16</div>

                                                        </div>
                                                    </div>

                                                    <div class="divider"></div>

                                                </div>
                                                <!-- / CHATS LIST-->
                                            </div>
                                            <!-- / CHATS CONTENT -->

                                            <!-- CONTACTS BUTTON -->
                                            <button id="contacts-button" type="button"
                                                    class="btn btn-fab btn-primary a-align-bottom-right m-2"
                                                    aria-label="contacts button">
                                                <i class="icon icon-plus"></i>
                                            </button>
                                            <!-- / CONTACTS BUTTON -->
                                        </div>

                                        <div id="contacts-view" class="view d-none flex-column no-gutters">
                                            <!-- CONTACTS TOOLBAR -->
                                            <div class="toolbar bg-primary text-auto">

                                                <!-- TOOLBAR TOP -->
                                                <div class="toolbar-top row no-gutters align-items-center px-4">

                                                    <button type="button" class="back-to-chats-button btn btn-icon"
                                                            aria-label="back button">
                                                        <i class="icon icon-arrow-left"></i>
                                                    </button>

                                                    <span class="h6">CONTACTS</span>
                                                </div>
                                                <!-- / TOOLBAR TOP -->

                                                <!-- TOOLBAR BOTTOM -->
                                                <div class="toolbar-bottom row align-items-center no-gutters px-4">

                                                    <div
                                                        class="search-wrapper md-elevation-1 row no-gutters align-items-center w-100 p-2">
                                                        <i class="icon-magnify s-4"></i>
                                                        <input class="col pl-2" type="text"
                                                               placeholder="Search contact">
                                                    </div>
                                                </div>
                                                <!-- / TOOLBAR BOTTOM -->
                                            </div>
                                            <!-- / CONTACTS TOOLBAR -->

                                            <!-- CONTACTS CONTENT -->
                                            <div class="content col custom-scrollbar">

                                                <!-- CONTACTS LIST-->
                                                <div class="contact-list">

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            A
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Abbott.jpg"
                                                                 class="avatar" alt="Abbott"/>
                                                            <i class="icon icon- s-4 status online"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Abbott</div>
                                                            <div class="mood text-muted">I never sign anything until I
                                                                pretend to read it first..
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Arnold.jpg"
                                                                 class="avatar" alt="Arnold"/>
                                                            <i class="icon icon- s-4 status do-not-disturb"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Arnold</div>
                                                            <div class="mood text-muted">Looks like Andrew Jackson's
                                                                been tossed to the back of the bus.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            B
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Barrera.jpg"
                                                                 class="avatar" alt="Barrera"/>
                                                            <i class="icon icon- s-4 status do-not-disturb"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Barrera</div>
                                                            <div class="mood text-muted">Love is going to bed
                                                                early.Marriage is going to sleep early.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Blair.jpg" class="avatar"
                                                                 alt="Blair"/>
                                                            <i class="icon icon- s-4 status offline"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Blair</div>
                                                            <div class="mood text-muted">I would be unstoppable. If i
                                                                could just get started.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Boyle.jpg" class="avatar"
                                                                 alt="Boyle"/>
                                                            <i class="icon icon- s-4 status offline"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Boyle</div>
                                                            <div class="mood text-muted">'GOOD MORNING COFFEE'....Meet
                                                                your maker!!!!
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            C
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Christy.jpg"
                                                                 class="avatar" alt="Christy"/>
                                                            <i class="icon icon- s-4 status offline"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Christy</div>
                                                            <div class="mood text-muted">We always hold hands. If I let
                                                                go, she shops.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Copeland.jpg"
                                                                 class="avatar" alt="Copeland"/>
                                                            <i class="icon icon- s-4 status online"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Copeland</div>
                                                            <div class="mood text-muted">I get enough exercise just
                                                                pushing my luck.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            E
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Estes.jpg" class="avatar"
                                                                 alt="Estes"/>
                                                            <i class="icon icon- s-4 status away"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Estes</div>
                                                            <div class="mood text-muted">What comes after the man bun
                                                                hairstyle? The he-hive!
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            H
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Harper.jpg"
                                                                 class="avatar" alt="Harper"/>
                                                            <i class="icon icon- s-4 status offline"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Harper</div>
                                                            <div class="mood text-muted">Always try to be modest and be
                                                                proud of it!
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Helen.jpg" class="avatar"
                                                                 alt="Helen"/>
                                                            <i class="icon icon- s-4 status away"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Helen</div>
                                                            <div class="mood text-muted">Why are there stitch marks on
                                                                zombies? Who's giving them medical attention?
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Henderson.jpg"
                                                                 class="avatar" alt="Henderson"/>
                                                            <i class="icon icon- s-4 status offline"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Henderson</div>
                                                            <div class="mood text-muted">I can't decide if people who
                                                                wear pajamas in public have given up on life or are
                                                                living it to the fullest.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            J
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Josefina.jpg"
                                                                 class="avatar" alt="Josefina"/>
                                                            <i class="icon icon- s-4 status online"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Josefina</div>
                                                            <div class="mood text-muted">The fastest way to being happy
                                                                is to make other people happy. You go first
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            K
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Katina.jpg"
                                                                 class="avatar" alt="Katina"/>
                                                            <i class="icon icon- s-4 status away"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Katina</div>
                                                            <div class="mood text-muted">If I was a rat,,, I wouldn't
                                                                give anyone my ass.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            L
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Lily.jpg" class="avatar"
                                                                 alt="Lily"/>
                                                            <i class="icon icon- s-4 status do-not-disturb"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Lily</div>
                                                            <div class="mood text-muted">A zip line but from the sofa to
                                                                the fridge
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            M
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Mai.jpg" class="avatar"
                                                                 alt="Mai"/>
                                                            <i class="icon icon- s-4 status away"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Mai</div>
                                                            <div class="mood text-muted">If a girl tells you she has a
                                                                nipple ring, the only correct response is 'I don't
                                                                believe you.'
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            N
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Nancy.jpg" class="avatar"
                                                                 alt="Nancy"/>
                                                            <i class="icon icon- s-4 status do-not-disturb"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Nancy</div>
                                                            <div class="mood text-muted">Prison counts as a gated
                                                                community, right?
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Nora.jpg" class="avatar"
                                                                 alt="Nora"/>
                                                            <i class="icon icon- s-4 status do-not-disturb"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Nora</div>
                                                            <div class="mood text-muted">I never date left handed women.
                                                                Righty tighty, lefty loosey.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            O
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Odessa.jpg"
                                                                 class="avatar" alt="Odessa"/>
                                                            <i class="icon icon- s-4 status away"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Odessa</div>
                                                            <div class="mood text-muted">A day without sunshine is like,
                                                                night.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            R
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Reyna.jpg" class="avatar"
                                                                 alt="Reyna"/>
                                                            <i class="icon icon- s-4 status offline"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Reyna</div>
                                                            <div class="mood text-muted">I can't wait for summer in
                                                                Canada...
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            S
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Shauna.jpg"
                                                                 class="avatar" alt="Shauna"/>
                                                            <i class="icon icon- s-4 status online"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Shauna</div>
                                                            <div class="mood text-muted">My take home pay doesn’t ven
                                                                take me home.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Shepard.jpg"
                                                                 class="avatar" alt="Shepard"/>
                                                            <i class="icon icon- s-4 status online"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Shepard</div>
                                                            <div class="mood text-muted">I don't speak Spanish, but I'm
                                                                pretty sure 'Dora' means 'annoying'
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            T
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Tillman.jpg"
                                                                 class="avatar" alt="Tillman"/>
                                                            <i class="icon icon- s-4 status do-not-disturb"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Tillman</div>
                                                            <div class="mood text-muted"></div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Trevino.jpg"
                                                                 class="avatar" alt="Trevino"/>
                                                            <i class="icon icon- s-4 status away"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Trevino</div>
                                                            <div class="mood text-muted">Apparently, a rat and a plastic
                                                                tube does not count as a DIY abortion kit.
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Tyson.jpg" class="avatar"
                                                                 alt="Tyson"/>
                                                            <i class="icon icon- s-4 status do-not-disturb"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Tyson</div>
                                                            <div class="mood text-muted">I'm wondering why life keeps
                                                                teaching me lessons I have no desire to learn...
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="contact row no-gutters align-items-center pl-10">

                                                        <div
                                                            class="fist-letter text-primary h6 a-align-top-left pt-2 pl-3">
                                                            V
                                                        </div>

                                                        <div class="avatar-wrapper">
                                                            <img src="../assets/images/avatars/Velazquez.jpg"
                                                                 class="avatar" alt="Velazquez"/>
                                                            <i class="icon icon- s-4 status online"></i>
                                                        </div>

                                                        <div class="col pl-4">
                                                            <div class="h6 name">Velazquez</div>
                                                            <div class="mood text-muted">Modulation in all things.</div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <!-- / CONTACTS LIST-->
                                            </div>
                                            <!-- / CONTACTS CONTENT -->
                                        </div>

                                        <div id="user-view" class="view d-none flex-column no-gutters">
                                            <!-- CONTACTS TOOLBAR -->
                                            <div class="toolbar bg-primary text-auto d-flex flex-column no-gutters">

                                                <!-- TOOLBAR TOP -->
                                                <div class="toolbar-top row no-gutters align-items-center px-4">

                                                    <button type="button" class="back-to-chats-button btn btn-icon"
                                                            aria-label="back button">
                                                        <i class="icon icon-arrow-left"></i>
                                                    </button>
                                                </div>
                                                <!-- / TOOLBAR TOP -->

                                                <!-- TOOLBAR BOTTOM -->
                                                <div
                                                    class="toolbar-bottom col d-flex flex-column align-items-center justify-content-center">

                                                    <img src="../assets/images/avatars/profile.jpg" class="avatar huge"
                                                         alt="John Doe"/>

                                                    <div class="user-name h4 my-2">John Doe</div>

                                                </div>
                                                <!-- / TOOLBAR BOTTOM -->
                                            </div>
                                            <!-- / CONTACTS TOOLBAR -->

                                            <!-- CONTACTS CONTENT -->
                                            <div class="content col bg-faded p-4">

                                                <div class="card p-4">
                                                    <form>
                                                        <div class="form-group mt-4">
                <textarea class="form-control" id="exampleTextarea"
                          rows="3">it's a status....not your diary...</textarea>
                                                            <label for="exampleTextarea">Mood</label>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                            <!-- / CONTACTS CONTENT -->
                                        </div>

                                    </div>
                                </aside>

                                <div class="content col">

                                    <div id="chat-content-views" class="views">

                                        <!-- START -->
                                        <div id="start-view"
                                             class="view d-flex flex-column align-items-center justify-content-center">
                                            <div
                                                class="big-circle md-elevation-4 row align-items-center justify-content-center no-gutters">

                                                <i class="s-32 text-primary icon-hangouts"></i>

                                            </div>

                                            <span class="app-title h3 my-3">Chat App</span>

                                            <span class="text-muted h6 d-none d-xl-block">Select contact to start the chat!..</span>

                                            <button type="button" class="btn btn-secondary d-block d-xl-none"
                                                    data-fuse-bar-toggle="chat-left-sidebar">
                                                Select contact to start the chat!..
                                            </button>

                                        </div>
                                        <!-- / START -->

                                        <!-- CHAT -->
                                        <div id="chat-view"
                                             class="view flex-column align-items-center justify-content-center d-none">
                                            <!-- CHAT TOOLBAR -->
                                            <div
                                                class="toolbar row no-gutters align-items-center justify-content-between w-100 px-4">

                                                <div class="col">

                                                    <div class="row no-gutters align-items-center">

                                                        <!-- RESPONSIVE CHATS BUTTON-->
                                                        <button type="button" class="btn btn-icon"
                                                                data-fuse-bar-toggle="chat-left-sidebar">
                                                            <i class="icon icon-hangouts s-8"></i>
                                                        </button>
                                                        <!-- / RESPONSIVE CHATS BUTTON-->

                                                        <!-- CHAT CONTACT-->
                                                        <div class="chat-contact row no-gutters align-items-center">

                                                            <div class="avatar-wrapper mr-4">
                                                                <img src="../assets/images/avatars/Barrera.jpg"
                                                                     class="avatar" alt="Barrera"/>

                                                                <i class="icon icon- s-4 status do-not-disturb"></i>
                                                            </div>

                                                            <div class="chat-contact-name">
                                                                Barrera
                                                            </div>
                                                        </div>
                                                        <!-- / CHAT CONTACT-->

                                                    </div>
                                                </div>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                            <!-- / CHAT TOOLBAR -->

                                            <!-- CHAT CONTENT -->
                                            <div class="chat-content col custom-scrollbar">

                                                <!-- CHAT MESSAGES -->
                                                <div class="chat-messages">

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">Quickly come to the meeting room 1B, we
                                                                have a big server issue
                                                            </div>
                                                            <div class="time text-muted text-right mt-2">20/03/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row user p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/profile.jpg"
                                                             alt="John Doe">

                                                        <div class="bubble">
                                                            <div class="message">I’m having breakfast right now, can’t
                                                                you wait for 10 minutes?
                                                            </div>
                                                            <div class="time text-muted text-right mt-2">20/04/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">We are losing money! Quick!</div>
                                                            <div class="time text-muted text-right mt-2">01/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row user p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/profile.jpg"
                                                             alt="John Doe">

                                                        <div class="bubble">
                                                            <div class="message">It’s not my money, you know. I will eat
                                                                my breakfast and then I will come to the meeting room.
                                                            </div>
                                                            <div class="time text-muted text-right mt-2">01/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">You are the worst!</div>
                                                            <div class="time text-muted text-right mt-2">01/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">We are losing money! Quick!</div>
                                                            <div class="time text-muted text-right mt-2">01/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row user p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/profile.jpg"
                                                             alt="John Doe">

                                                        <div class="bubble">
                                                            <div class="message">It’s not my money, you know. I will eat
                                                                my breakfast and then I will come to the meeting room.
                                                            </div>
                                                            <div class="time text-muted text-right mt-2">01/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">You are the worst!</div>
                                                            <div class="time text-muted text-right mt-2">01/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">We are losing money! Quick!</div>
                                                            <div class="time text-muted text-right mt-2">01/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row user p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/profile.jpg"
                                                             alt="John Doe">

                                                        <div class="bubble">
                                                            <div class="message">It’s not my money, you know. I will eat
                                                                my breakfast and then I will come to the meeting room.
                                                            </div>
                                                            <div class="time text-muted text-right mt-2">02/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">You are the worst!</div>
                                                            <div class="time text-muted text-right mt-2">02/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">We are losing money! Quick!</div>
                                                            <div class="time text-muted text-right mt-2">02/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row user p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/profile.jpg"
                                                             alt="John Doe">

                                                        <div class="bubble">
                                                            <div class="message">It’s not my money, you know. I will eat
                                                                my breakfast and then I will come to the meeting room.
                                                            </div>
                                                            <div class="time text-muted text-right mt-2">02/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                    <!-- MESSAGE -->
                                                    <div class="row flex-nowrap message-row contact p-4">

                                                        <img class="avatar mr-4"
                                                             src="../assets/images/avatars/Barrera.jpg"
                                                             alt=""/>

                                                        <div class="bubble">
                                                            <div class="message">You are the worst!</div>
                                                            <div class="time text-muted text-right mt-2">02/05/16</div>
                                                        </div>

                                                    </div>
                                                    <!-- / MESSAGE -->

                                                </div>
                                                <!-- CHAT MESSAGES -->
                                            </div>
                                            <!-- / CHAT CONTENT -->

                                            <!-- CHAT FOOTER -->
                                            <div
                                                class="chat-footer row align-items-center justify-content-center w-100 p-2 pl-4">

                                                <!-- REPLY FORM -->
                                                <form class="reply-form row no-gutters align-items-center w-100">

                                                    <div class="form-group col mr-4">
            <textarea class="form-control" id="exampleTextarea"
                      placeholder="Type and hit enter to send message"></textarea>
                                                    </div>

                                                    <button type="button" class="btn btn-fab btn-primary"
                                                            aria-label="Send message">
                                                        <i class="icon icon-send"></i>
                                                    </button>

                                                </form>
                                                <!-- / REPLY FORM -->
                                            </div>
                                            <!-- / CHAT FOOTER-->
                                        </div>
                                        <!-- / CHAT -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / CONTENT -->
                    </div>

                    <script type="text/javascript" src="../assets/js/apps/chat/chat.js"></script>
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