@extends('layouts.app')

@section('title', "Programar Nou Partit")

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-blue-800 mb-6">Programar nou partit</h1>

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

        <form action="{{ route('partits.store') }}" method="POST" class="space-y-5">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="local" class="block text-gray-700 font-bold mb-2">Equip Local:</label>
                    <input type="text" name="local" id="local" value="{{ old('local') }}" 
                           class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500"
                           placeholder="Ex: Barça Femení">
                </div>

                <div>
                    <label for="visitant" class="block text-gray-700 font-bold mb-2">Equip Visitant:</label>
                    <input type="text" name="visitant" id="visitant" value="{{ old('visitant') }}"
                           class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500"
                           placeholder="Ex: Reial Societat">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="data" class="block text-gray-700 font-bold mb-2">Data del partit:</label>
                    <input type="date" name="data" id="data" value="{{ old('data') }}"
                           class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
                </div>

                <div>
                    <label for="resultat" class="block text-gray-700 font-bold mb-2">Resultat (Opcional):</label>
                    <input type="text" name="resultat" id="resultat" value="{{ old('resultat') }}"
                           class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500"
                           placeholder="Ex: 2-1">
                    <p class="text-xs text-gray-500 mt-1">Format: gols-gols (ex: 3-0)</p>
                </div>
            </div>

            <div class="flex justify-end space-x-3 pt-4">
                <a href="{{ route('partits.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Cancel·lar
                </a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 font-bold">
                    Guardar Partit
                </button>
            </div>
        </form>
    </div>
@endsection