<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <!-- Contenido del div -->
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('INFORMACION') }}
            </h2>
            
            <!-- Botón que estará a la derecha -->
            @if(count($alumnos) > 0)
                <a href="/actualizarInformacion/{{$alumnos[0]['id']}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Actualizar
                </a>
            @endif
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!--Formularios-->
                    <header>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">
                            Informacion Personal
                        </h1>
                
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            En este lugar encontraras informacion sobre el estudiante xd
                        </p>
                    </header>
                    <div class="container mx-auto p-4">
                        <div class="card">
                            <div class="card-body">
                                @if(count($alumnos) > 0)
                                @php
                                    $primerAlumno = $alumnos[0];
                                @endphp
                                <!--Nombre-->
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                        <strong>Nombre:</strong> 
                                    </h2>
                                    <p class="mt-1 p-3 bg-gray-800 border rounded-md shadow-md text-white">{{ Auth::user()->name }}</p>
                                    <!--Apellido-->
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                        <strong>Apellido:</strong>
                                    </h2>
                                    <p class="mt-1 p-3 bg-gray-800 border rounded-md shadow-md text-white">{{$primerAlumno["apellido"]}}</p>
                                    <!--Correo Electrónico-->
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                        <strong>Correo Electrónico:</strong>
                                    </h2>
                                    <p class="mt-1 p-3 bg-gray-800 border rounded-md shadow-md text-white">{{ Auth::user()->email }}</p>
                                    <!--Celular-->
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                        <strong>Numero de Celular:</strong>
                                    </h2>
                                    <p class="mt-1 p-3 bg-gray-800 border rounded-md shadow-md text-white">{{$primerAlumno["celular"]}}</p>
                                    <!--Celular_2-->
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                        <strong>Numero Alternativo:</strong>
                                    </h2>
                                    <p class="mt-1 p-3 bg-gray-800 border rounded-md shadow-md text-white">{{$primerAlumno["celular_2"]}}</p>
                                    <!--DNI-->
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                        <strong>Documento Nacional de Identidad:</strong>
                                    </h2>
                                    <p class="mt-1 p-3 bg-gray-800 border rounded-md shadow-md text-white">{{$primerAlumno["dni"]}}</p>
                                    <!--Padre-->
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                        <strong>Nombre del Padre:</strong>
                                    </h2>
                                    <p class="mt-1 p-3 bg-gray-800 border rounded-md shadow-md text-white">{{$primerAlumno["padre"]}}</p>
                                    <!--Madre-->
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                        <strong>Nombre del Madre:</strong>
                                    </h2>
                                    <p class="mt-1 p-3 bg-gray-800 border rounded-md shadow-md text-white">{{$primerAlumno["madre"]}}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
