<div class="top_nav">
    <div class="nav_menu">
      <nav>
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <ul class="nav navbar-nav navbar-right bounce">
            @include('backend.menu.partials.perfil')
            @include('backend.menu.partials.notificaciones')
        </ul>
      </nav>
    </div>
  </div>
<div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="javascript:void(0)" class="site_title"><i class="fa fa-user"></i> <span>Administrador</span></a>
          </div>
          <div class="clearfix"></div>
          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{asset('backend/img/user.png')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Bienvenido</span>
              <h2>{{Auth()->user()->name}}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->
          <br />
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Administracion</h3>
              <ul class="nav side-menu">
                    @php
                    $dir = resource_path().'/views/backend/menu/secciones/administracion';
                    $includepath =  "backend.menu.secciones.administracion.";
                    $includes = [];
                    $directorio = opendir($dir);
                    $archivos = [];
                    while ($archivo = readdir($directorio))
                    {
                        if (!is_dir($archivo))
                        {
                            $ruta =  $includepath . str_replace(".blade.php", "", $archivo);
                            array_push( $includes ,$ruta );
                        }
                    }
                    closedir($directorio);

                    @endphp
                    @foreach ($includes as $inc)
                    @include($inc)
                    @endforeach
              </ul>
            </div>
            <div class="menu_section">
              <h3>Website</h3>
              <ul class="nav side-menu">
                    @php
                    $dir = resource_path().'/views/backend/menu/secciones/website';
                    $includepath =  "backend.menu.secciones.website.";
                    $includes = [];
                    $directorio = opendir($dir);
                    $archivos = [];
                    while ($archivo = readdir($directorio))
                    {
                        if (!is_dir($archivo))
                        {
                            $ruta =  $includepath . str_replace(".blade.php", "", $archivo);
                            array_push( $includes ,$ruta );
                        }
                    }
                    closedir($directorio);

                    @endphp
                    @foreach ($includes as $inc)
                    @include($inc)
                    @endforeach
              </ul>
            </div>

          </div>

          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
            @include('backend.menu.partials.menu-footer')
          <!-- /menu footer buttons -->
        </div>
      </div>
