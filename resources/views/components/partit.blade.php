@props(['local', 'visitant', 'data', 'resultat'])

{{-- Estructura idéntica a la de jugadora/estadi --}}
<div class="border rounded-lg shadow-md p-6 bg-white">
    <h2 class="text-2xl font-bold text-blue-800 mb-4">{{ $local }} vs {{ $visitant }}</h2>
    
    <div class="space-y-2 text-gray-800">
        <p>
            <strong class="font-semibold text-gray-600">Equip Local:</strong> 
            {{ $local }}
        </p>
        <p>
            <strong class="font-semibold text-gray-600">Equip Visitant:</strong> 
            {{ $visitant }}
        </p>
        <p>
            <strong class="font-semibold text-gray-600">Data del partit:</strong> 
            {{ $data }}
        </p>
        <p>
            <strong class="font-semibold text-gray-600">Resultat:</strong> 
            @if($resultat)
                {{ $resultat }}
            @else
                <span class="text-gray-500 italic">No jugat</span>
            @endif
        </p>
    </div>
</div>