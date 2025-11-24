@extends('layouts.app')

@section('title', "Guia d'Equips")

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-blue-800">Guia d'Equips</h1>
        
        <a href="{{ route('equips.create') }}" 
           class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            + Nou equip
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
                    <th class="px-4 py-3">Estadi</th>
                    <th class="px-4 py-3">Títols</th>
                </tr>
            </thead>
            <tbody>
                @forelse($equips as $key => $equip)
                    <tr class="hover:bg-gray-50 border-b border-gray-200">

                        <td class="px-4 py-3 font-semibold">
                            <a href="{{ route('equips.show', $key) }}" class="text-blue-700 hover:underline">
                                {{ $equip['nom'] }}
                            </a>
                        </td>

                        <td class="px-4 py-3">
                            {{ $equip['estadi'] }}
                        </td>

                        <td class="px-4 py-3">
                            {{ $equip['titols'] }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center p-4 text-gray-500">
                            No hi ha equips registrats.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection