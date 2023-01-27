<div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
    <div class="p-3 text-center bg-primary">
        <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{asset('images/faces/face28.png')}}" alt="">
    </div>
    <div class="p-2">
        <h5 class="dropdown-header text-uppercase pl-2 text-dark">Opciones Usuario</h5>
        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
            <span>Inbox</span>
            <span class="p-0">
                <span class="badge badge-primary">3</span>
                <i class="mdi mdi-email-open-outline ml-1"></i>
            </span>
        </a>
        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
            <span>Perfil</span>
            <span class="p-0">
                <span class="badge badge-success">1</span>
                <i class="mdi mdi-account-outline ml-1"></i>
            </span>
        </a>
        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
            <span>Ajustes</span>
            <i class="mdi mdi-settings"></i>
        </a>
        <div role="separator" class="dropdown-divider"></div>
        <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Acciones</h5>
        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
            <span>Blockear Cuenta</span>
            <i class="mdi mdi-lock ml-1"></i>
        </a>
        @guest
        @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif
        @else
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                        document.getElementById('formLogout').submit();">

            <i class="fas fa-sign-in-alt"></i> Cerrar Sesión
        </a>
        <form id="formLogout" action="{{ route('logout') }}" method="POST" style="display: none" class="d-done">
            @csrf
        </form>
        @endguest
    </div>
</div>