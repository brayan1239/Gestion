<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Espacio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!--Formularios-->
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            
                        </p>
                    </header>
                    <div class="container mx-auto p-4">
                        <table class="min-w-full border border-gray-300">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b">Nombre Curso</th>
                                    <th class="py-2 px-4 border-b">Ciclo</th>
                                    <th class="py-2 px-4 border-b">Creditos</th>
                                    <th class="py-2 px-4 border-b">Escuela Academica</th>
                                    <!-- Agrega más encabezados según tus necesidades -->
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Ejemplo de una fila de datos -->
                                @foreach ($cursos as $curso)
                                    
                                
                                <tr>
                                    <td class="py-2 px-4 border-b">{{$curso["nombre_curso"]}}</td>
                                    <td class="py-2 px-4 border-b">{{$curso["ciclo"]}}</td>
                                    <td class="py-2 px-4 border-b">{{$curso["creditos"]}}</td>
                                    <td class="py-2 px-4 border-b">{{$curso["escuela_academica"]}}</td>
                                    <!-- Agrega más celdas según tus necesidades -->
                                </tr>
                                @endforeach
                                <!-- Agrega más filas según tus necesidades -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
