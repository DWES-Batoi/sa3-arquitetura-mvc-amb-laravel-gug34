<div class="border rounded-lg shadow-md p-6 bg-white">
    <h2 class="text-2xl font-bold text-blue-800 mb-4">{{ $nom }}</h2>
    
    <div class="space-y-2 text-gray-800">
        <p>
            <strong class="font-semibold text-gray-600">Ciutat:</strong> 
            {{ $ciutat }}
        </p>
        <p>
            <strong class="font-semibold text-gray-600">Capacitat:</strong> 
            {{ number_format($capacitat, 0, ',', '.') }} espectadors
        </p>
        <p>
            <strong class="font-semibold text-gray-600">Equip Principal:</strong> 
            {{ $equip_principal }}
        </p>
    </div>
</div>