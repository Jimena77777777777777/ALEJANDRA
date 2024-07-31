<h6 class="navbar-heading text-muted">
    @if (auth()->user()->role == 'admin')
        Gestión
    @else
        Actividades     
    @endif
</h6>
<ul class="navbar-nav">
    @if (auth()->user()->role == 'admin')
        <li class="nav-item  active ">
            <a class="nav-link  active " href="/home">
                <i class="ni ni-tv-2 text-danger"></i> Dashboard
            </a>
        </li>
        

   
    @else

    <li class="nav-item">
        <a class="nav-link " href="{{ url('/trabajo') }}">
            <i class="ni ni-briefcase-24 text-blue"></i> Trabajos
        </a>
    </li>

        <li class="nav-item">
            <a class="nav-link " href="">
                <i class="ni ni-calendar-grid-58 text-primary"></i> Agendar Tarea
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="">
                <i class="fas fa-clock text-info"></i> Mis tareas
            </a>
        </li>
    @endif

    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
            <i class="fas fa-sign-in-alt text-danger"></i> Cerrar sesión
        </a>
        <form action="{{ route('logout') }}" method="POST" style="display: none " id="formLogout">
            @csrf
        </form>
    </li>
</ul>
@if (auth()->user()->role == 'admin')
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Repor</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="ni ni-books text-default"></i> Tareas
            </a>
        </li>
            

    </ul>
@endif