
<nav id="toolbar" class="bg-insignia bg-utn border-double shadow-none h-p">

<div class="row no-gutters align-items-center flex-nowrap">
    <!-- Boton Menu Ppal cuando el contenido ocupa toda la viewport -->
    <button type="button"       
            class="toggle-aside-button btn btn-icon d-block d-lg-none"
            data-fuse-bar-toggle="aside">
        <i class="icon icon-menu"></i>
    </button>

    <div class="col"><!-- es necesario para que no se rompa todo el header--></div>

    <!-- <div class="toolbar-separator"></div>-->
    <div class="col-auto">

        <div class="row no-gutters align-items-center justify-content-end color-insignia">

            <div class="user-menu-button dropdown">

                <div class="dropdown-toggle ripple row align-items-center no-gutters px-1 px-sm-4"
                     role="button"
                     id="dropdownUserMenu"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar-wrapper h-10">
                        <img class="avatar" src="{{ url('Fuse/assets/images/avatars/profile.jpg')}}">
                        <i class="status text-green icon-checkbox-marked-circle s-4"></i>
                    </div>
                    <span class="username mx-3 d-none d-md-block">Usuario Conectado</span>
                </div>

                <div class="dropdown-menu" aria-labelledby="dropdownUserMenu">

                    <a class="dropdown-item" href="#">
                        <div class="row no-gutters align-items-center flex-nowrap">
                            <i class="icon-account"></i>
                            <span class="px-3">Mi Perfil</span>
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
                            <span class="px-3">Cerrar Sesión</span>
                        </div>
                    </a>

                </div>
            </div>

            <div class="toolbar-separator"></div>
   
            <button type="button" class="search-button btn btn-icon">
                <i class="icon icon-magnify"></i>
            </button>
            <div class="toolbar-separator"></div>

        </div>
    </div>
</div>
</nav>
