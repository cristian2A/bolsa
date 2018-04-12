<aside id="aside" class="aside aside-left bg-utn"
                   data-fuse-bar="aside" data-fuse-bar-media-step="md"
                   data-fuse-bar-position="left">
    <div class="aside-content-wrapper">

        <div class="aside-content">

            <div class="row no-gutters flex-nowrap bg-utn">
                    <div class="head-title">
                        <div class="logo1">
                            <img src="{{url('images/layout/arania3.png')}}" class="logoutn"/>
                        </div>
                        <div class="title utn ">
                            <h3>U T N</h3>
                            <h4 class="subtitle"> Facultad Regional Rosario</h4>
                        </div>
                    </div>
            </div>
            <div class="aside-toolbar bg-insignia ">
                
                
                <div class="logo">
                    <span class="logo-icon"><img src="{{url('images/layout/bolsa-trabajo.png')}}" ></span>
                    <span class="logo-text">BOLSA DE TRABAJO</span>
                </div>
                <div class="item-align-bottom" >
                <button id="toggle-fold-aside-button" type="button" class="btn btn-icon d-none d-lg-block pt-5 pr-0"
                                    data-fuse-aside-toggle-fold>
                    <i class="icon icon-backburger bg-white color-insignia"></i>
                </button>
                </div>
            </div>

            <ul class="nav flex-column custom-scrollbar" id="sidenav" data-children=".nav-item">

                <li class="subheader">
                    <span>EMPRESAS</span>
                </li>

                <li class="nav-item" role="tab" id="heading-dashboards">

                    <a class="nav-link ripple with-arrow "
                        data-toggle="collapse"
                        data-target="#collapse-dashboards"
                        href="#"
                        aria-expanded="true"
                        aria-controls="collapse-dashboards">
                        <i class="icon s-4 icon-tile-four"></i>
                        <span>Gestionar Empresas</span>
                    </a>

                    <ul id="collapse-dashboards"
                        class="collapse show"
                        role="tabpanel"
                        aria-labelledby="heading-dashboards"
                        data-children=".nav-item">

                        <li class="nav-item">
                            <a class="nav-link ripple active" href="{{url('admin/empresas')}}"
                                data-page-url="{{url('admin/empresas')}}">

                                <span>Listar Empresas</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link ripple " href="{{url('admin/empresas/nueva')}}"
                                data-page-url="{{url('admin/empresas/nueva')}}">

                                <span>Nueva Empresa</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ripple " href="{{url('admin/empresas/contactos')}}"
                                data-page-url="{{url('admin/empresas/contactos')}}">

                                <span>Contactos de Empresas</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="subheader">
                    <span>POSTULANTES</span>
                            </li>

                            <li class="nav-item" role="tab" id="heading-authentication">

                                <a class="nav-link ripple with-arrow collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapse-authentication"
                                   href="#"
                                   aria-expanded="false"
                                   aria-controls="collapse-authentication">
                                   <i class="icon s-4 icon-account"></i>
                                    <span>Gestionar Postulantes</span>
                                </a>

                                <ul id="collapse-authentication"
                                    class="collapse"
                                    role="tabpanel"
                                    aria-labelledby="heading-authentication"
                                    data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="{{url('admin/postulantes')}}"
                                           data-page-url="{{url('admin/postulantes')}}">

                                            <span>Listar Postulantes</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="{{url('admin/postulantes/nuevo')}}"
                                           data-page-url="{{url('admin/postulantes/nuevo')}}">
                                            <span>Nuevo Postulante</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="{{url('admin/usuarios/password/reset')}}"
                                           data-page-url="{{url('admin/usuarios/password/reset')}}">
                                            <span>Resetear Password</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </aside>