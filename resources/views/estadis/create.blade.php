@extends('layouts.app')

@section('title', "Crear Nou Estadi")

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-blue-800 mb-6">Afegir un nou estadi</h1>

        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
                <p class="font-bold">Hi ha hagut errors:</p>
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('estadis.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="nom" class="block text-gray-700 font-bold mb-2">Nom de l'estadi:</label>
                <input type="text" name="nom" id="nom" value="{{ old('nom') }}" 
                       class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500"
                       placeholder="Ex: Estadi Johan Cruyff">
            </div>

            <div>
                <label for="ciutat" class="block text-gray-700 font-bold mb-2">Ciutat:</label>
                <input type="text" name="ciutat" id="ciutat" value="{{ old('ciutat') }}"
                       class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500"
                       placeholder="Ex: Sant Joan Despí">
            </div>

            <div>
                <label for="capacitat" class="block text-gray-700 font-bold mb-2">Capacitat:</label>
                <input type="number" name="capacitat" id="capacitat" value="{{ old('capacitat') }}"
                       class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500"
                       placeholder="Ex: 6000">
            </div>

            <div>
                <label for="equip_principal" class="block text-gray-700 font-bold mb-2">Equip Principal:</label>
                <input type="text" name="equip_principal" id="equip_principal" value="{{ old('equip_principal') }}"
                       class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500"
                       placeholder="Ex: FC Barcelona Femení">
            </div>

            <div class="flex justify-end space-x-3 pt-4">
                <a href="{{ route('estadis.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Cancel·lar
                </a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 font-bold">
                    Guardar Estadi
                </button>
            </div>
        </form>
    </div>
@endsection