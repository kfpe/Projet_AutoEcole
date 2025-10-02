@extends('layout2.superAdmin.dashboard')

@section('title', 'Modifier agence')

@section('content')


 <style> body { background-color: #f4f6fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
     header { background-color: #002f6c; color: #fff; padding: 20px; text-align: center; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.2); } 
     header h1 { margin: 0; font-size: 1.8rem; font-weight: bold; } .form-card { max-width: 650px; margin: 40px auto; background: #fff; border-radius: 20px; box-shadow: 0 6px 25px rgba(0,0,0,0.1); padding: 35px; transition: 0.3s; } 
     .form-card:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.15); } .form-card h2 { color: #002f6c; font-weight: bold; margin-bottom: 25px; text-align: center; } 
     .btn-custom { background-color: #002f6c; color: #fff; font-weight: bold; border-radius: 10px; transition: 0.3s; } .btn-custom:hover { background-color: #014080; color: #fff; transform: scale(1.05); } 
    .form-control:focus { border-color: #002f6c; box-shadow: 0 0 8px rgba(0,47,108,0.3); } 
    </style>
<div class="container mt-4">
    <div class="card p-4 shadow-sm">
        <h4 class="mb-3">✏️ Modifier l'agence</h4>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('agences.update', $agence) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" value="{{ old('nom', $agence->nom) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Ville</label>
                <input type="text" name="ville" class="form-control" value="{{ old('ville', $agence->ville) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Quartier</label>
                <input type="text" name="quartier" class="form-control" value="{{ old('quartier', $agence->quartier) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Numéro</label>
                <input type="text" name="tel" class="form-control" value="{{ old('tel', $agence->tel) }}" required>
            </div>

            <div class="text-center mt-3">
                <button class="btn btn-primary px-4">Mettre à jour</button>
                <a href="{{ route('agences.index') }}" class="btn btn-secondary px-4">Annuler</a>
            </div>
        </form>
    </div>
</div>
@endsection
