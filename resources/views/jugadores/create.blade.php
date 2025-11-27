@extends('layouts.app')

@section('title', "Afegir Nova Jugadora")

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-blue-800 mb-6">Afegir nova jugadora</h1>

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

        <form action="{{ route('jugadores.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="nom" class="block text-gray-700 font-bold mb-2">Nom complet:</label>
                <input type="text" name="nom" id="nom" value="{{ old('nom') }}"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Ex: Aitana Bonmatí">
            </div>

            <div>
                <label for="equip" class="block text-gray-700 font-bold mb-2">Equip actual:</label>
                <input type="text" name="equip" id="equip" value="{{ old('equip') }}"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Ex: FC Barcelona Femení">
            </div>

            <div>
                <label for="posicio" class="block text-gray-700 font-bold mb-2">Posició:</label>
                <select name="posicio" id="posicio"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500 bg-white">
                    <option value="" disabled {{ old('posicio') ? '' : 'selected' }}>Selecciona una posició</option>

                    @foreach(['Portera', 'Defensa', 'Migcampista', 'Davantera'] as $pos)
                        <option value="{{ $pos }}" {{ old('posicio') == $pos ? 'selected' : '' }}>
                            {{ $pos }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="flex justify-end space-x-3 pt-4">
                <a href="{{ route('jugadores.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Cancel·lar
                </a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 font-bold">
                    Guardar Jugadora
                </button>
            </div>
        </form>
    </div>
@endsection