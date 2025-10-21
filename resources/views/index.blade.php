@extends('base')

@section('title', 'Acceuil')

@section('content')


    <h1>Hello Page d'accueil</h1>

    @if (session('success'))
        <x-alert type="success">
            {{session('success')}}
        </x-alert>
    @endif

@endsection