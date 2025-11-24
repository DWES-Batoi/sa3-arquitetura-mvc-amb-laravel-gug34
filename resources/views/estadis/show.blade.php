@extends('layouts.app')

@section('title', "Detall de l'Estadi")

@section('content')
    <div class="mb-6">
        <a href="{{ route('estadis.index') }}" class="text-blue-600 hover:underline">
            &larr; Tornar al llistat
        </a>
    </div>
    
    <x-estadi 
        :nom="$estadi['nom']"
        :ciutat="$estadi['ciutat']"
        :capacitat="$estadi['capacitat']"
        :equip-principal="$estadi['equip_principal']"
    />
@endsection