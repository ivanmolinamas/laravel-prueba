<header class="h-header bg-header p-5 flex justify-between">
    <img class="max-h-full" src="{{asset("/images/logo.png")}}" alt="logo de los enalces">

    <h1 class="text-5xl text-white">Proyecto de Laravel</h1>

    <div>

        <!--  si no estamos logueados -->
        @guest
            <a href="/login" class="btn btn-success">Acceso</a>
            <a href="/register" class="btn btn-success">Registro</a>
        @endguest

        <!--  siestamos logueados -->
        @auth
            <!-- Obtenemos el nombre del usuario con auth -->
            <p class="text-2xl text-white">{{auth()->user()->name}}</p>

            <!-- desconexion va por post y por ello fo rmulario-->
            <form action="{{route("logout")}}" method="post">
                @csrf <!--incluimos tocken para evitar expired -->
                <input class="btn btn-xs btn-error" type="submit" value="Logout">
            </form>

        @endauth
    </div>
</header>
