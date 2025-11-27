@extends('layouts.app')

@section('title', "Detall de l'Equip")

@section('content')
    <div class="mb-6">
        <a href="{{ route('equips.index') }}" class="text-blue-600 hover:underline">
            &larr; Tornar al llistat
        </a>
    </div>
    <x-equip 
        :nom="$equip['nom']"
        :estadi="$equip['estadi']"
        :titols="$equip['titols']"
    />
@endsection