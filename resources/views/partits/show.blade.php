@extends('layouts.app')

@section('title', "Detall del Partit")

@section('content')
    <div class="mb-6">
        <a href="{{ route('partits.index') }}" class="text-blue-600 hover:underline">
            &larr; Tornar al llistat
        </a>
    </div>

    <x-partit 
        :local="$partit['local']"
        :visitant="$partit['visitant']"
        :data="$partit['data']"
        :resultat="$partit['resultat']"
    />
@endsection