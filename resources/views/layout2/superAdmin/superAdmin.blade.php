@extends('layout2.superAdmin.dashboard')

@section('title', 'Dashboard')

@section('content')

<div class="mb-4">
    <h4 class="fw-bold text-primary border-start border-4 ps-3 border-primary">
        <i class="bi bi-speedometer2 me-2"></i> Vue d’ensemble
    </h4>
    <p class="text-muted ms-1">Statistiques générales du système</p>
</div>

<div class="row g-4">

    <!-- Carte Agences -->
    <div class="col-md-4">
        <div class="card stat-card shadow-sm border-0">
            <span class="left-band bg-primary"></span>
            <div class="card-body text-center py-4">
                <i class="bi bi-building display-6 text-primary mb-2"></i>
                <h5 class="fw-semibold mb-2 text-dark">Agences</h5>
                <h3 class="fw-bold text-primary counter mb-0">{{ $nbAgences }}</h3>
            </div>
        </div>
    </div>

    <!-- Carte Administrateurs -->
    <div class="col-md-4">
        <div class="card stat-card shadow-sm border-0">
            <span class="left-band bg-success"></span>
            <div class="card-body text-center py-4">
                <i class="bi bi-person-gear display-6 text-success mb-2"></i>
                <h5 class="fw-semibold mb-2 text-dark">Administrateurs</h5>
                <h3 class="fw-bold text-success counter mb-0">{{ $nbAdmins }}</h3>
            </div>
        </div>
    </div>

    <!-- Carte Candidatures -->
    <div class="col-md-4">
        <div class="card stat-card shadow-sm border-0">
            <span class="left-band bg-warning"></span>
            <div class="card-body text-center py-4">
                <i class="bi bi-people-fill display-6 text-warning mb-2"></i>
                <h5 class="fw-semibold mb-2 text-dark">Candidatures</h5>
                <h3 class="fw-bold text-warning counter mb-0">124</h3>
            </div>
        </div>
    </div>

</div>
@endsection

@push('styles')
<style>
    /* Bande colorée visible à gauche */
    .stat-card {
        position: relative;
        border-radius: 12px;
        background: #fff;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    .left-band {
        position: absolute;
        top: 0;
        left: 0;
        width: 18px; /* légèrement plus visible */
        height: 100%;
        border-top-left-radius: 12px;
        border-bottom-left-radius: 12px;
        content: '';
       
    }

    /* Effet de survol */
    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    /* Animation compteur */
    .counter {
        animation: countUp 1.5s ease-in-out;
    }

    @keyframes countUp {
        from {
            opacity: 0;
            transform: translateY(10px) scale(0.9);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    /* Responsive */
    @media (max-width: 768px) {
        h4.fw-bold {
            font-size: 1.2rem;
        }

        .stat-card {
            margin-bottom: 1rem;
        }
    }
</style>
@endpush
