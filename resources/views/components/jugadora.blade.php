@props(['nom', 'equip', 'posicio'])

<div class="border rounded-lg shadow-md p-6 bg-white">
    <h2 class="text-2xl font-bold text-blue-800 mb-4">{{ $nom }}</h2>
    
    <div class="space-y-2 text-gray-800">
        <p>
            <strong class="font-semibold text-gray-600">Equip:</strong> 
            {{ $equip }}
        </p>
        <p>
            <strong class="font-semibold text-gray-600">Posició:</strong> 
            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full uppercase font-semibold tracking-wide">
                {{ $posicio }}
            </span>
        </p>
    </div>
</div>