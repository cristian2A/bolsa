<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{ url('utn.ico')}}" type="image/x-icon" />

        <!-- STYLESHEETS -->
        <style type="text/css">
            [fuse-cloak],
            .fuse-cloak {
                display: none !important;
            }
        </style>

        <!-- Icons.css -->
        <link type="text/css" rel="stylesheet" href="{{ url('Fuse/assets/icons/fuse-icon-font/style.css')}}">

        <!-- Animate.css -->
        <link type="text/css" rel="stylesheet" href="{{ url ('Fuse/assets/vendor/animate.css/animate.min.css')}}">

        <!-- PNotify -->
        <link type="text/css" rel="stylesheet" href="{{ url('Fuse/assets/vendor/pnotify/pnotify.custom.min.css')}}">

        <!-- Nvd3 - D3 Charts -->
        <link type="text/css" rel="stylesheet" href="{{ url('Fuse/assets/vendor/nvd3/build/nv.d3.min.css')}}"/>

        <!-- Perfect Scrollbar -->
        <link type="text/css" rel="stylesheet" href="{{ url('Fuse/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css')}}"/>

        <!-- Fuse Html -->
        <link type="text/css" rel="stylesheet" href="{{ url('Fuse/assets/vendor/fuse-html/fuse-html.min.css')}}"/>

        <!-- Main CSS -->
        <link type="text/css" rel="stylesheet" href="{{ url('Fuse/assets/css/main.css')}} ">
        <link type="text/css" rel="stylesheet" href="{{ url('css/misestilos.css')}}">
        <!-- / STYLESHEETS -->

        <!-- JAVASCRIPT -->

        <!-- jQuery -->
        <script type="text/javascript" src="{{ url('Fuse/assets/vendor/jquery/dist/jquery.min.js')}}"></script>

        <!-- Mobile Detect -->
        <script type="text/javascript" src="{{ url('Fuse/assets/vendor/mobile-detect/mobile-detect.min.js')}}"></script>

        <!-- Perfect Scrollbar -->
        <script type="text/javascript"
                src="{{ url('Fuse/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>

        <!-- Popper.js -->
        <script type="text/javascript" src="{{ url('Fuse/assets/vendor/popper.js/index.js')}}"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="{{ url('Fuse/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

        <!-- Nvd3 - D3 Charts -->
        <script type="text/javascript" src="{{ url('Fuse/assets/vendor/d3/d3.min.js')}}"></script>
        <script type="text/javascript" src="{{ url('Fuse/assets/vendor/nvd3/build/nv.d3.min.js')}}"></script>

        <!-- Data tables -->
        <script type="text/javascript" src="{{ url('Fuse/assets/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>

        <script type="text/javascript"
                src="{{ url('Fuse/assets/vendor/datatables-responsive/js/dataTables.responsive.js')}}"></script>

        <!-- PNotify -->
        <script type="text/javascript" src="{{ url('Fuse/assets/vendor/pnotify/pnotify.custom.min.js')}}"></script>

        <!-- Fuse Html -->
        <script type="text/javascript" src="{{ url('Fuse/assets/vendor/fuse-html/fuse-html.min.js')}}"></script>

        <!-- Main JS -->
        <script type="text/javascript" src="{{ url('Fuse/assets/js/main.js')}}"></script>

        <!-- / JAVASCRIPT -->
    </head>

    <body class="layout layout-vertical layout-left-navigation layout-below-toolbar">
  
@include('admin.layout.menu-sup')

        <div id="wrapper">

            @include('admin.layout.menu-ppal')

            <div class="content-wrapper">

                <div class="content">
                    <div class="page-layout simple">

                        <div class="page-content-wrapper">
                                <!-- HEADER -->
                                
                                <div class="page-header-utn bg-insignia text-auto d-flex flex-column justify-content-between ">
                                    <div class="mx-auto align-items-center">            
                                        <div class="h-title">
                                            <div class="title utn">
                                                @yield('section_title')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- / HEADER -->

                                <!-- CONTENT -->
                                <div class="page-content p-8">
                                @yield('contenido')
                                </div>
                                <!-- / CONTENT -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>