<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --main-color: #002f6c;
            --secondary: #004080;
            --hover-color: #0056a6;
        }

        body {
            background: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* --- SIDEBAR --- */
        .sidebar {
             height: 100vh;
        width: 240px;
        background: linear-gradient(180deg, var(--main-color), var(--secondary));
        color: #fff;
        position: fixed;
        top: 0;
        
        padding-top: 1rem;
        transition: all 0.3s ease-in-out;
        z-index: 1050; /* au-dessus du contenu */
        }

        .sidebar h4 {
            font-size: 1.3rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .sidebar .nav-link {
            color: #d1d1d1;
            font-weight: 500;
            padding: 12px 20px;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }

        .sidebar .nav-link:hover {
            background: var(--hover-color);
            color: #fff;
        }

        .sidebar .nav-link.active {
            background: #e6fdf4ff !important;
            color: var(--main-color) !important;
            font-weight: bold;
        }

        /* Séparateur de section */
        .menu-separator {
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            margin: 10px 0;
        }

        /* --- CONTENT --- */
        .content {
            margin-left: 240px;
            padding: 20px;
            transition: all 0.3s ease-in-out;
        }



        /* --- OVERLAY --- */
    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        z-index: 1040;
        transition: opacity 0.3s ease-in-out;
    }

    .overlay.active {
        display: block;
    }

        /* --- HEADER --- */
        .main-header {
            background: #fff;
            border-radius: 12px;
            padding: 15px 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            animation: fadeDown 0.6s ease-in-out;
        }

        .main-header h5 {
            font-weight: 600;
            color: var(--main-color);
        }

        .main-header img {
            transition: transform 0.3s ease-in-out;
        }

        .main-header img:hover {
            transform: rotate(10deg) scale(1.1);
        }

        /* Animation header */
        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive */
        @media(max-width:768px) {
            .sidebar { left: -240px; position: absolute; }
            .sidebar.active { left: 0; }
            .content { margin-left: 0; }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <h4 class="text-center text-white mb-4">Super Admin</h4>
        <ul class="nav flex-column px-2">
             <div class="menu-separator"></div>
            <li><a href="{{ route('superAdmin') }}" class="nav-link {{ request()->routeIs('superAdmin') ? 'active' : '' }}"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
            <li><a href="{{ route('agences.index') }}" class="nav-link {{ request()->routeIs('agences.*') ? 'active' : '' }}"><i class="bi bi-building"></i> Agences</a></li>
            <li><a href="{{ route('administrateurs.index') }}" class="nav-link {{ request()->routeIs('administrateurs.*') ? 'active' : '' }}"><i class="bi bi-person-gear"></i> Administrateurs</a></li>
            <div class="menu-separator"></div>
            <li><a href="{{ route('settings') }}" class="nav-link {{ request()->routeIs('settings') ? 'active' : '' }}"><i class="bi bi-gear"></i> Paramètres</a></li>
            <li><a href="{{ route('settings') }}" class="nav-link {{ request()->routeIs('settings') ? 'active' : '' }}"><i class="bi bi-gear"></i> Se deconnecter</a></li>
        </ul>
    </div>


    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>
    <!-- Content -->
    <div class="content">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4 main-header">
            <button id="menu-toggle" class="btn btn-outline-primary d-md-none"><i class="bi bi-list"></i></button>
            <h5 class="m-0">👋 Bienvenue, {{ Auth::user()->name ?? 'Admin' }}</h5>
            <div class="d-flex align-items-center">
                <i class="bi bi-bell fs-5 me-3 text-secondary position-relative">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        3
                    </span>
                </i>
                <img src="https://i.pravatar.cc/40" class="rounded-circle border border-2" width="40" height="40" alt="profil">
            </div>
        </div>

        <!-- Ici s'injecte le contenu -->
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        

        
        const sidebar = document.getElementById("sidebar");
        const overlay = document.getElementById("overlay");
        const toggleBtn = document.getElementById("menu-toggle");

        toggleBtn.addEventListener("click", () => {
            sidebar.classList.toggle("active");
            overlay.classList.toggle("active");
        });

        // Fermeture en cliquant sur overlay
        overlay.addEventListener("click", () => {
            sidebar.classList.remove("active");
            overlay.classList.remove("active");
        });
    
    </script>
</body>
</html>
