@extends('layouts.app')

@section('title', "Fitxa de la Jugadora")

@section('content')
    <div class="mb-6">
        <a href="{{ route('jugadores.index') }}" class="text-blue-600 hover:underline">
            &larr; Tornar al llistat
        </a>
    </div>

    <x-jugadora 
        :nom="$jugadora['nom']"
        :equip="$jugadora['equip']"
        :posicio="$jugadora['posicio']"
    />
@endsection