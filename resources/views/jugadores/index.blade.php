@extends('layouts.app')

@section('title', "Llistat de Jugadores")

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-blue-800">Jugadores</h1>
        
        <a href="{{ route('jugadores.create') }}" 
           class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            + Nova jugadora
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-blue-800 text-white">
                    <th class="px-4 py-3">Nom</th>
                    <th class="px-4 py-3">Equip</th>
                    <th class="px-4 py-3">Posició</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jugadores as $key => $jugadora)
                    <tr class="hover:bg-gray-50 border-b border-gray-200">
                        <td class="px-4 py-3 font-semibold">
                            <a href="{{ route('jugadores.show', $key) }}" class="text-blue-700 hover:underline">
                                {{ $jugadora['nom'] }}
                            </a>
                        </td>
                        <td class="px-4 py-3">{{ $jugadora['equip'] }}</td>
                        <td class="px-4 py-3">
                            <span class="bg-gray-200 text-gray-700 py-1 px-2 rounded text-sm">
                                {{ $jugadora['posicio'] }}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center p-4 text-gray-500">
                            No hi ha jugadores registrades.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection