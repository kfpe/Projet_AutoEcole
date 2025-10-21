
@extends('base')

@section('title', 'UserInfo')

@section('content')


    <h1>Hello Page d'accueil</h1>

    @if (session('success'))
        <x-alert type="success">
            {{session('success')}}
        </x-alert>
    @endif


        <h3>Liste des utilisateurs</h3>

        <x-user-list :users="$users"></x-user-list>

@endsection