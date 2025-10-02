@extends('layout2.superAdmin.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="row g-4">

    <!-- Carte Agences -->
    <div class="col-md-4">
        <div class="card stat-card shadow-sm border-0">
            <div class="card-header border-0 bg-primary text-white py-2">
                <i class="bi bi-building fs-3 me-2"></i> Agences
            </div>
            <div class="card-body text-center">
                <h3 class="fw-bold text-primary mb-0 counter">{{ $nbAgences }}</h3>
            </div>
        </div>
    </div>

    <!-- Carte Administrateurs -->
    <div class="col-md-4">
        <div class="card stat-card shadow-sm border-0">
            <div class="card-header border-0 bg-success text-white py-2">
                <i class="bi bi-person-gear fs-3 me-2"></i> Administrateurs
            </div>
            <div class="card-body text-center">
                <h3 class="fw-bold text-success mb-0 counter">{{ $nbAdmins }}</h3>
            </div>
        </div>
    </div>

    <!-- Exemple d'autre idée : Candidatures -->
    <div class="col-md-4">
        <div class="card stat-card shadow-sm border-0">
            <div class="card-header border-0 bg-warning text-dark py-2">
                <i class="bi bi-people-fill fs-3 me-2"></i> Candidatures
            </div>
            <div class="card-body text-center">
                <h3 class="fw-bold text-warning mb-0 counter">124</h3>
            </div>
        </div>
    </div>

</div>
@endsection

@push('styles')
<style>
    /* Animation compteur */
    .counter {
        animation: countUp 1.5s ease-in-out;
    }

    @keyframes countUp {
        from { opacity: 0; transform: translateY(10px) scale(0.9); }
        to   { opacity: 1; transform: translateY(0) scale(1); }
    }

    /* Animation au survol */
    .stat-card {
        transition: all 0.3s ease-in-out;
        border-radius: 12px;
    }

    .stat-card:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        font-weight: bold;
        font-size: 1rem;
        border-radius: 12px 12px 0 0 !important;
    }
</style>
@endpush
