<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Espacio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!--Formularios-->
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            Informacion del Estudiante
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            Por favor rellene la informacion con datos reales
                        </p>
                    </header>
                    <form method="POST" class="mt-2 space-y-2" action="">
                        @csrf
                        <div>
                            <x-input-label :value="__('Apellidos')" />
                            <x-text-input name="message" class="mt-2 block w-full" placeholder="Ingrese su apellido"/>
                        </div>
                        <div>
                            <x-input-label :value="__('Numero de Celular')" />
                            <x-text-input name="message" class="mt-2 block w-full" placeholder="Ingrese su numero de celular"/>
                        </div>
                        <div>
                            <x-input-label :value="__('Numero de Celular Secundario')"/>
                            <x-text-input name="message" class="mt-2 block w-full" placeholder="Ingrese otro numero alternativo"/>
                        </div>
                        <div>
                            <x-input-label :value="__('Documento Nacional de Identidad (DNI)')"/>
                            <x-text-input name="message" class="mt-2 block w-full" placeholder="Ingrese su DNI"/>
                        </div>
                        <div>
                            <x-input-label :value="__('Nombre completo del Padre')"/>
                            <x-text-input name="message" class="mt-2 block w-full" placeholder="Ingrese el nombre completo del padre"/>
                        </div>
                        <div>
                            <x-input-label :value="__('Nombre completo de la Madre')"/>
                            <x-text-input name="message" class="mt-2 block w-full" placeholder="Ingrese el nombre completo de la madre"/>
                        </div>
                        <div class="flex items-center justify-center">
                            <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" >
                                Actualizar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>