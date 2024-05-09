<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des universités') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Localisation</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Logo</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($universites as $universite)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $universite->nom }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $universite->localisation }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $universite->description }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($universite->logo)
                                            <img src="{{ asset('storage/app/public/logos/' . $universite->logo) }}" alt="Logo de l'université" class="max-w-full h-auto">
                                        @else
                                            Aucun logo disponible
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="py-2"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
