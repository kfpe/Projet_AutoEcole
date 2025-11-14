<nav class="navbar">
    <div class="container">
        <a href="{{ url('/') }}" class="logo">
            <i class="fas fa-car"></i>
            <span>AutoDrive</span>
        </a>
        <div class="menu-toggle" id="navbarToggler">
            <i class="fas fa-bars"></i>
        </div>
        <ul class="nav-links" id="navbarCollapse">
            <li class="{{ request()->is('/') ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fas fa-home"></i> Accueil
                </a>
            </li>
            <li class="{{ request()->is('services', 'askservice') ? 'active' : '' }}">
                <a href="{{ route('services') }}">
                    <i class="fas fa-cogs"></i> Services
                </a>
            </li>
            @auth
                <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="">
                        <i class="fas fa-tachometer-alt"></i> Tableau de bord
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-user-circle"></i> Mon compte
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href=""><i class="fas fa-user"></i> Profil</a></li>
                        <li><a href=""><i class="fas fa-file-alt"></i> Notes</a></li>
                        <li><a href=""><i class="fas fa-envelope"></i> Messages</a></li>
                        @if(auth()->user()->isAdmin())
                            <li><a href=""><i class="fas fa-cog"></i> Administration</a></li>
                        @endif
                        <li>
                            <form method="POST" action="">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt"></i> Déconnexion
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>
                <li><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Inscription</a></li>
            @endauth
        </ul>
    </div>
</nav>