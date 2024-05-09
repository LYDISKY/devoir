<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accueil Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <a href="{{ route('notations.index') }}" class="btn btn-primary mt-4">Voir les notations des universités</a>
                </div>
                <div class="p-6 text-gray-900">
                
                    <a href="{{ route('universites.index') }}" class="btn btn-primary">Voir la liste des universités</a>
                </div>
                <div class="p-6 text-gray-900">
                
                    <a href="{{ route('universites.create') }}" class="btn btn-primary">Ajouter une universite</a>
                </div>
                <div class="p-6 text-gray-900">
                
                    <a href="{{ route('notations.create') }}" class="btn btn-primary">Ajouter une notation</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
