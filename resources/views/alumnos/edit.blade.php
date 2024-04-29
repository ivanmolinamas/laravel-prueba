<x-layouts.layout>
    <x-auth-session-status class="mb-4" :status="session('status')"/>
    <div class="flex flex-row justify-center p-5 bg-gray-400 h-full overflow-hidden">
        <div class="min-h-screen max-h">
            <form method="POST" action="{{ route('alumnos.update', $alumno->id) }}" class="bg-white p-5 rounded-2xl ">

                <!--incluimos el metodo para hacer la actulalización-->
                @method('PUT')

                <!-- { { //$errors } }  con esto podriamos ver los errores-->
                <!-- hay que incluir el token en los formularios-->
                @csrf

                <!-- nombre -->
                <x-input-label for="nombre">Nombre</x-input-label>
                <x-text-input name="nombre" :value="$alumno->nombre"/>
                @if ($errors->get("nombre"))
                    @foreach($errors->get("nombre") as $error)
                        <div class="text-sm text-red-600">
                            {{$error}}
                        </div>
                    @endforeach
                @endif

                <!-- DNI -->
                <x-input-label for="dni">Dni</x-input-label>
                <x-text-input name="dni" :value="$alumno->dni" />
                @if ($errors->get("nombre"))
                    @foreach($errors->get("nombre") as $error)
                        <div class="text-sm text-red-600">
                            {{$error}}
                        </div>
                    @endforeach
                @endif

                <!-- edad -->
                <x-input-label for="email">Email</x-input-label>
                <x-text-input name="email" :value="$alumno->email" />
                @if ($errors->get("email"))
                    @foreach($errors->get("email") as $error)
                        <div class="text-sm text-red-600">
                            {{$error}}
                        </div>
                    @endforeach
                @endif

                <!-- edad -->
                <x-input-label for="edad">Edad</x-input-label>
                <x-text-input name="edad" :value="$alumno->edad" />
                @if ($errors->get("edad"))
                    @foreach($errors->get("edad") as $error)
                        <div class="text-sm text-red-600">
                            {{$error}}
                        </div>
                    @endforeach
                @endif


                <!-- botones -->

                <div class="mt-3 text-center">
                    <input class="btn btn-success" type="submit" value="Guardar"/>
                    <a href="{{route('alumnos.index')}}" class="btn btn-error">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

</x-layouts.layout>
