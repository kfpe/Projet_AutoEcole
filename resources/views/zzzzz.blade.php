@extends('base')

@section('title', 'Ma page de test')



@section('content')

    <form action="" method="POST">
        <x-label for="name" name="Nom"></x-label>
        <x-input type="text" name="name" id="name" placeholder="Saisissez votre nom" class="p-3"/>
    </form>

    <x-card>
        <x-slot name="header"> Debut</x-slot>

            <p>Voici la logique que je voulais inserer a ce niveau</p>
        

        <x-slot name="footer">
            <x-button type="text" message="Send" btn="primary" class="p-3"></x-button>
        </x-slot>
    </x-card>

@endsection