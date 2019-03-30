<li class="">
    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
      <img src="{{asset('backend/img/user.png')}}" alt=""> {{ Auth()->user()->name }}
      <span class=" fa fa-angle-down"></span>
    </a>
    <ul class="dropdown-menu dropdown-usermenu pull-right">
      <li><a href="javascript:;"> Perfil</a></li>
      <li>
        <a href="javascript:;">
          <span class="badge bg-red pull-right">PRO</span>
          <span>Configuracion</span>
        </a>
      </li>
      <li>
        <a href="javascript:;">
          <span class="badge bg-red pull-right">PDF</span>
          <span>Ayuda</span>
        </a>
      </li>
      <li><a href= href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out pull-right"></i> Cerrar sesion</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
        </li>

    </ul>
  </li>
