@extends('layouts.app')

@section('title', "Llistat d'Estadis")

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-blue-800">Estadis de Futbol Femení</h1>
        
        <a href="{{ route('estadis.create') }}" 
           class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            + Nou estadi
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
                    <th class="px-4 py-3">Ciutat</th>
                    <th class="px-4 py-3 text-right">Capacitat</th>
                    <th class="px-4 py-3">Equip Principal</th>
                </tr>
            </thead>
            <tbody>
                @forelse($estadis as $key => $estadi)
                    <tr class="hover:bg-gray-50 border-b border-gray-200">
                        <td class="px-4 py-3 font-semibold">
                            <a href="{{ route('estadis.show', $key) }}" class="text-blue-700 hover:underline">
                                {{ $estadi['nom'] }}
                            </a>
                        </td>
                        <td class="px-4 py-3">{{ $estadi['ciutat'] }}</td>
                        <td class="px-4 py-3 text-right">{{ $estadi['capacitat'] }}</td>
                        <td class="px-4 py-3 italic text-gray-600">{{ $estadi['equip_principal'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center p-4 text-gray-500">
                            No hi ha estadis registrats.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection