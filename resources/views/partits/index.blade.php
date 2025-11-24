@extends('layouts.app')

@section('title', "Calendari de Partits")

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-blue-800">Partits</h1>
        
        <a href="{{ route('partits.create') }}" 
           class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            + Nou partit
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
                    <th class="px-4 py-3">Local</th>
                    <th class="px-4 py-3">Visitant</th>
                    <th class="px-4 py-3">Data</th>
                    <th class="px-4 py-3">Resultat</th>
                </tr>
            </thead>
            <tbody>
                @forelse($partits as $key => $partit)
                    <tr class="hover:bg-gray-50 border-b border-gray-200">
                        <td class="px-4 py-3 font-semibold">
                            <a href="{{ route('partits.show', $key) }}" class="text-blue-700 hover:underline">
                                {{ $partit['local'] }}
                            </a>
                        </td>

                        <td class="px-4 py-3">
                            {{ $partit['visitant'] }}
                        </td>

                        <td class="px-4 py-3">
                            {{ $partit['data'] }}
                        </td>
                        
                        <td class="px-4 py-3 font-bold">
                            @if($partit['resultat'])
                                {{ $partit['resultat'] }}
                            @else
                                <span class="text-gray-400 font-normal italic">-</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center p-4 text-gray-500">
                            No hi ha partits programats.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection