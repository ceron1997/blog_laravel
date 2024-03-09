<header>
    <h1>blog ****************</h1>
    <nav>
        <ul>
          <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'bg-blue-500' : ''}}">Home</a></li>
          <li><a href="{{route('cursos.index')}}"class="{{request()->routeIs('cursos.*') ? 'bg-blue-500' : ''}}">Cursos</a></li>
          <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'bg-blue-500' : ''}}">Nosotros</a></li>
        </ul>
    </nav>
</header>

