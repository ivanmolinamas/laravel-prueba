<nav class="h-nav p-3 flex-row justify-items-start space-x-2">
    <a  class="btn btn-active btn-primary" href="/">Inicio</a>
    @auth
    <a  class="btn btn-active btn-accent" href="{{route("proyectos")}}">Proyectos</a>
        <a  class="btn btn-active btn-accent" href="{{route("alumnos.index")}}">Alumnos</a>
    @endauth
    <a  class="btn btn-active btn-accent" href="#">Sobre mi</a>
    <a  class="btn btn-active btn-secondary" href="/about">About</a>
</nav>
