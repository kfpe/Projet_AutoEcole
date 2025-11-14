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
            --light-bg: #f4f6f9;
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: var(--light-bg);
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
            left: 0;
            padding-top: 80px; /* espace pour le header fixe */
            transition: all 0.3s ease-in-out;
            z-index: 1060;
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

        .menu-separator {
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            margin: 10px 0;
        }

        /* --- HEADER FIXE --- */
        .main-header {
            position: fixed;
            top: 0;
            left: 240px;
            right: 0;
            background: #fff;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
            z-index: 1050;
            transition: all 0.3s ease-in-out;
        }

        .main-header h5 {
            font-weight: 600;
            color: var(--main-color);
            margin: 0;
        }

        .main-header img {
            transition: transform 0.3s ease-in-out;
        }

        .main-header img:hover {
            transform: rotate(10deg) scale(1.1);
        }

        /* --- CONTENT --- */
        .content {
            margin-left: 240px;
            padding: 100px 20px 80px 20px; /* espace sous le header et au-dessus du footer */
            transition: all 0.3s ease-in-out;
        }

        /* --- FOOTER FIXE --- */
        footer {
            position: fixed;
            bottom: 0;
            left: 240px;
            width: calc(100% - 240px);
            background: #fff;
            color: var(--main-color);
            text-align: center;
            padding: 12px 10px;
            font-size: 0.9rem;
            box-shadow: 0 -3px 8px rgba(0,0,0,0.1);
            transition: all 0.3s ease-in-out;
            z-index: 1030;
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

        /* --- RESPONSIVE --- */
        @media(max-width: 768px) {
            .sidebar {
                left: -240px;
                position: absolute;
                padding-top: 70px;
            }

            .sidebar.active {
                left: 0;
            }

            .main-header {
                left: 0;
                width: 100%;
            }

            .content {
                margin-left: 0;
                padding: 90px 15px 80px 15px;
            }

            footer {
                left: 0;
                width: 100%;
            }
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
            <li><a href="{{ route('settings') }}" class="nav-link"><i class="bi bi-gear"></i> Paramètres</a></li>
            <li><a href="{{ route('logout') }}" class="nav-link text-danger"><i class="bi bi-box-arrow-right"></i> Déconnexion</a></li>
        </ul>
    </div>

    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- Header -->
    <div class="main-header">
        <button id="menu-toggle" class="btn btn-outline-primary d-md-none"><i class="bi bi-list"></i></button>
        <h5>👋 Bienvenue, {{ Auth::user()->name ?? 'Admin' }}</h5>
        <div class="d-flex align-items-center">
            <i class="bi bi-bell fs-5 me-3 text-secondary position-relative">
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    3
                </span>
            </i>
            <img src="https://i.pravatar.cc/40" class="rounded-circle border border-2" width="40" height="40" alt="profil">
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        © 2025 Super Admin Dashboard — Développé avec ❤️ par <strong>TonNom</strong>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sidebar = document.getElementById("sidebar");
        const overlay = document.getElementById("overlay");
        const toggleBtn = document.getElementById("menu-toggle");

        toggleBtn.addEventListener("click", () => {
            sidebar.classList.toggle("active");
            overlay.classList.toggle("active");
        });

        overlay.addEventListener("click", () => {
            sidebar.classList.remove("active");
            overlay.classList.remove("active");
        });
    </script>
</body>
</html>
