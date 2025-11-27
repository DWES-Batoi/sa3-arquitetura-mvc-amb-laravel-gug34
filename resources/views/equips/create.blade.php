@extends('layouts.app')

@section('title', "Afegir Nou Equip")

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-blue-800 mb-6">Afegir un nou equip</h1>

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

        <form action="{{ route('equips.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="nom" class="block text-gray-700 font-bold mb-2">Nom de l'equip:</label>
                <input type="text" name="nom" id="nom" value="{{ old('nom') }}" 
                       class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500"
                       placeholder="Ex: Barça Femení">
            </div>

            <div>
                <label for="estadi" class="block text-gray-700 font-bold mb-2">Estadi:</label>
                <input type="text" name="estadi" id="estadi" value="{{ old('estadi') }}"
                       class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500"
                       placeholder="Ex: Camp Nou">
            </div>

            <div>
                <label for="titols" class="block text-gray-700 font-bold mb-2">Títols:</label>
                <input type="number" name="titols" id="titols" value="{{ old('titols') }}"
                       class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500"
                       placeholder="Ex: 30">
            </div>

            <div class="flex justify-end space-x-3 pt-4">
                <a href="{{ route('equips.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Cancel·lar
                </a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 font-bold">
                    Guardar Equip
                </button>
            </div>
        </form>
    </div>
@endsection