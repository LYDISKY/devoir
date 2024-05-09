<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-6 text-gray-900">
                    
                    <a href="{{ route('user_home') }}" class="btn btn-primary mt-4">Voir les notations des universités</a>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                
                    <a href="{{ route('user_universites') }}" class="btn btn-primary">Voir la liste des universités</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
