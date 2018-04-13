@extends('admin/layout/layout')
@section('title','BdT: Admin')

@section('section_title')
<div>
    
    <div class="col-md-10">
        <div class="row no-gutters align-items-center flex-nowrap">

            <button type="button" class="sidebar-toggle-button btn btn-icon d-inline-block d-lg-none mr-2" data-fuse-bar-toggle="contacts-sidebar">
                <i class="icon icon-menu"></i>
            </button>

            <!-- APP TITLE -->
            <div class="logo row no-gutters align-items-center flex-nowrap">
                <span class="logo-icon mr-4">
                    <i class="icon-account-box s-6"></i>
                </span>
                <span class="logo-text h4">Contacts</span>
            </div>
        </div>
    <!-- / APP TITLE -->
    </div>

    <!-- SEARCH -->
    <div class="col search-wrapper  align-items-right ">
        <div class="input-group">
            <span class="input-group-btn">
                <button type="button" class="btn btn-icon">
                    <i class="icon icon-magnify"></i>
                </button>
            </span>
            <input id="contacts-search-input" type="text" class="form-control" placeholder="Search for anyone" aria-label="Search for anyone"/>
        </div>
    </div>
    <!-- / SEARCH -->

</div>
<!-- / HEADER -->

@endsection

@section('contenido')
<!-- CONTENT -->
    <div class="content">
        <div id="contacts" class="page-layout simple left-sidebar-floating">
           
            <div class="page-content-wrapper">
                <aside class="page-sidebar p-6" data-fuse-bar="contacts-sidebar"
                                   data-fuse-bar-media-step="md">
                    <div class="page-sidebar-card">
                        <!-- SIDENAV HEADER -->
                        <div class="header p-4">

                                        <!-- USER -->
                                        <div class="row no-gutters align-items-center">
                                            <img class="avatar mr-4" alt="John Doe"
                                                 src="../assets/images/avatars/profile.jpg">
                                            <span class="font-weight-bold">John Doe</span>
                                        </div>
                                        <!-- / USER -->

                                    </div>
                                    <!-- / SIDENAV HEADER -->

                                    <div class="divider"></div>

                                    <!-- SIDENAV CONTENT -->
                                    <div class="content">

                                        <ul class="nav flex-column">

                                            <li class="nav-item">
                                                <a class="nav-link ripple active" href="#">
                                                    <span>All contacts</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple" href="#">
                                                    <span>Frequently contacted</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple" href="#">
                                                    <span>Starred contacts</span>
                                                </a>
                                            </li>

                                            <div class="divider"></div>

                                            <li class="subheader">Groups</li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple" href="#">
                                                    <span class="pl-2">Friends</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple" href="#">
                                                    <span class="pl-2">Clients</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple" href="#">
                                                    <span class="pl-2">Recent Workers</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple" href="#">
                                                    <span class="pl-2">New Group</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- / SIDENAV CONTENT -->
                                </div>
                            </aside>

                            <!-- CONTENT -->
                            <div class="page-content p-4 p-sm-6">
                                <!-- CONTACT LIST -->
                                <div class="contacts-list card">

                                    <!-- CONTACT LIST HEADER -->
                                    <dvi class="contacts-list-header p-4">

                                        <div class="row no-gutters align-items-center justify-content-between">

                                            <div class="list-title text-muted">
                                                All contacts (25)
                                            </div>

                                            <button type="button" class="btn btn-icon">
                                                <i class="icon icon-sort-alphabetical"></i>
                                            </button>
                                        </div>

                                    </dvi>
                                    <!-- / CONTACT LIST HEADER -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Abbott"
                                             src="../assets/images/avatars/Abbott.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Abbott Keitch</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            abbott@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0175
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Digital Archivist
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Saois
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Arnold"
                                             src="../assets/images/avatars/Arnold.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Arnold Matlock</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            arnold@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0141
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Graphic Artist
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Laotcone
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Barrera"
                                             src="../assets/images/avatars/Barrera.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Barrera Bradbury</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            barrera@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0196
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Graphic Designer
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Unizim
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Blair" src="../assets/images/avatars/Blair.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Blair Strangeway</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            blair@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0118
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Visual Designer
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Conedubdax
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Boyle" src="../assets/images/avatars/Boyle.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Boyle Winters</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            boyle@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0177
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Catalogue Illustrator
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Newo
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Christy"
                                             src="../assets/images/avatars/Christy.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Christy Camacho</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            christy@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0136
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            3D Animator
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            uniway
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Copeland"
                                             src="../assets/images/avatars/Copeland.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Copeland Redcliff</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            copeland@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0107
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Multimedia Artist
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Tempron
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Estes" src="../assets/images/avatars/Estes.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Estes Stevens</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            estes@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0113
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Special Effects Artist
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            nam-dex
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Harper"
                                             src="../assets/images/avatars/Harper.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Harper MacGuffin</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            harper@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0173
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Application Developer
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            runcane
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Helen" src="../assets/images/avatars/Helen.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Helen Sheridan</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            helen@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0163
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Content Developer
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Subhow
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Henderson"
                                             src="../assets/images/avatars/Henderson.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Henderson Cambias</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            henderson@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0151
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Web Designer
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Howcom
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Josefina"
                                             src="../assets/images/avatars/Josefina.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Josefina Lakefield</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            josefina@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0160
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Web Developer
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Gecko
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Katina"
                                             src="../assets/images/avatars/Katina.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Katina Bletchley</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            katina@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0186
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Software Designer
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Lexicom
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Lily" src="../assets/images/avatars/Lily.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Lily Peasegood</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            lily@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0115
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Software Specialist
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            zooflex
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Mai" src="../assets/images/avatars/Mai.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Mai Nox</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            mai@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0199
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Software Engineer
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            quadzone
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Nancy" src="../assets/images/avatars/Nancy.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Nancy Jaggers</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            nancy@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0120
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Software Architect
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Opetamnix
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Nora" src="../assets/images/avatars/Nora.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Nora Franklin</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            nora@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0172
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Database Coordinator
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Saoway
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Odessa"
                                             src="../assets/images/avatars/Odessa.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Odessa Goodman</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            odessa@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0190
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Database Administration Manager
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            transace
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Reyna" src="../assets/images/avatars/Reyna.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Reyna Preece</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            reyna@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0116
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Data Processing Planner
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Dingex
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Shauna"
                                             src="../assets/images/avatars/Shauna.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Shauna Atherton</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            shauna@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0159
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Art Director
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Vivaflex
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Shepard"
                                             src="../assets/images/avatars/Shepard.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Shepard Rosco</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            shepard@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0173
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Magazine Designer
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Goldenla
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Tillman"
                                             src="../assets/images/avatars/Tillman.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Tillman Lee</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            tillman@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0183
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            News Photographer
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            K-techno
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Trevino"
                                             src="../assets/images/avatars/Trevino.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Trevino Bush</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            trevino@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0138
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Photojournalist
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Dalthex
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Tyson" src="../assets/images/avatars/Tyson.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Tyson Marshall</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            tyson@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0146
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Manuscript Editor
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            Geocon
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                    <!-- CONTACT ITEM -->
                                    <div
                                        class="contact-item ripple row no-gutters align-items-center py-2 px-3 py-sm-4 px-sm-6">

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"/>
                                            <span class="custom-control-indicator"></span>
                                        </label>

                                        <img class="avatar mx-4" alt="Velazquez"
                                             src="../assets/images/avatars/Velazquez.jpg"/>

                                        <div class="col text-truncate font-weight-bold">Velazquez Smethley</div>

                                        <div class="col email text-truncate px-1 d-none d-xl-flex">
                                            velezquez@withinpixels.com
                                        </div>

                                        <div class="col phone text-truncate px-1 d-none d-xl-flex">
                                            +1-202-555-0146
                                        </div>

                                        <div class="col job-title text-truncate px-1 d-none d-sm-flex">
                                            Publications Editor
                                        </div>

                                        <div class="col company text-truncate px-1 d-none d-sm-flex">
                                            ranex
                                        </div>

                                        <div class="col-auto actions">

                                            <div class="row no-gutters">

                                                <button type="button" class="btn btn-icon">

                                                    <i class="icon-star-outline"></i>

                                                </button>

                                                <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-dots-vertical"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT ITEM -->

                                </div>
                                <!-- / CONTACT LIST -->
                            </div>
                            <!-- / CONTENT -->
@endsection