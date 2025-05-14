<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - {{ __('dashboard.dashboard') }}</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- RTL Bootstrap if Arabic -->
    @if(app()->getLocale() == 'ar')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    @endif
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- Google Fonts - Nunito -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #4e73df;
            --primary-dark: #224abe;
            --secondary-color: #1cc88a;
            --accent-color: #36b9cc;
            --dark-color: #5a5c69;
            --light-color: #f8f9fc;
            --danger-color: #e74a3b;
            --warning-color: #f6c23e;
            --sidebar-width: 250px;
            --topbar-height: 60px;
        }
        
        body {
            font-family: 'Nunito', sans-serif;
            background-color: var(--light-color);
            padding-top: var(--topbar-height);
        }
        
        /* Sidebar */
        #sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            top: 0;
            transition: all 0.3s;
            z-index: 1000;
            background: linear-gradient(180deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            overflow-y: auto;
        }
        
        /* RTL/LTR positioning */
        html[dir="ltr"] #sidebar {
            left: 0;
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        html[dir="rtl"] #sidebar {
            right: 0;
            border-left: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-brand {
            padding: 1.25rem 1.5rem;
            font-size: 1.2rem;
            font-weight: 700;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .sidebar-nav {
            padding: 0;
            list-style: none;
        }
        
        .nav-item {
            position: relative;
        }
        
        .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            transition: all 0.3s;
            text-decoration: none;
        }
        
        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .nav-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
        }
        
        html[dir="ltr"] .nav-link.active {
            border-left: 4px solid white;
        }
        
        html[dir="rtl"] .nav-link.active {
            border-right: 4px solid white;
        }
        
        .nav-icon {
            width: 20px;
            text-align: center;
            transition: margin 0.3s;
        }
        
        html[dir="ltr"] .nav-icon {
            margin-right: 0.75rem;
        }
        
        html[dir="rtl"] .nav-icon {
            margin-left: 0.75rem;
        }
        
        /* Main Content */
        #main-content {
            transition: all 0.3s;
            min-height: calc(100vh - var(--topbar-height));
        }
        
        html[dir="ltr"] #main-content {
            margin-left: var(--sidebar-width);
        }
        
        html[dir="rtl"] #main-content {
            margin-right: var(--sidebar-width);
        }
        
        /* Top Navigation */
        #top-nav {
            height: var(--topbar-height);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999;
            background-color: white;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            transition: all 0.3s;
        }
        
        html[dir="ltr"] #top-nav {
            left: 0;
            padding-left: var(--sidebar-width);
        }
        
        html[dir="rtl"] #top-nav {
            right: 0;
            padding-right: var(--sidebar-width);
        }
        
        .navbar-search {
            max-width: 400px;
        }
        
        /* Cards */
        .dashboard-card {
            border-radius: 0.35rem;
            border: none;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .dashboard-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 0.5rem 1.5rem 0 rgba(58, 59, 69, 0.2);
        }
        
        .card-icon {
            font-size: 1.5rem;
            opacity: 0.7;
        }
        
        /* Footer */
        #main-footer {
            background-color: white;
            padding: 1.5rem;
            box-shadow: 0 -0.15rem 1.75rem 0 rgba(58, 59, 69, 0.1);
        }
        
        /* Breadcrumb */
        .breadcrumb {
            background-color: transparent;
            padding: 0;
        }
        
        /* Toggle Button */
        #sidebarToggle {
            border: none;
            background: transparent;
            color: var(--dark-color);
            font-size: 1.25rem;
        }
        
        /* Dropdown Adjustments */
        html[dir="rtl"] .dropdown-menu {
            text-align: right;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 992px) {
            #sidebar {
                transform: translateX(calc(var(--sidebar-width) * -1));
            }
            
            html[dir="rtl"] #sidebar {
                transform: translateX(var(--sidebar-width));
            }
            
            #sidebar.show {
                transform: translateX(0);
            }
            
            #main-content {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }
            
            #top-nav {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
        }
        
        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .fade-in {
            animation: fadeIn 0.3s ease-in;
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <!-- Sidebar -->
    <nav id="sidebar" class="d-print-none">
        <div class="sidebar-brand d-flex align-items-center justify-content-between">
            <span>{{ config('app.name') }}</span>
            <button id="sidebarClose" class="btn btn-link text-white d-lg-none">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <ul class="sidebar-nav">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <span>{{ __('dashboard.dashboard') }}</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <span>{{ __('dashboard.users') }}</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ route('about-us.index') }}" class="nav-link {{ request()->routeIs('about-us.*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-info-circle"></i>
                    <span>{{ __('dashboard.about_us') }}</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ route('contact.index') }}" class="nav-link {{ request()->routeIs('contact.*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-envelope"></i>
                    <span>{{ __('dashboard.contact') }}</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ route('services.index') }}" class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-concierge-bell"></i>
                    <span>{{ __('dashboard.services') }}</span>
                </a>
            </li>
             <li class="nav-item">
                <a href="{{ route('missions.index') }}" class="nav-link {{ request()->routeIs('missions.*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-concierge-bell"></i>
                    <span>{{ __('dashboard.missions') }}</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ route('messages.index') }}" class="nav-link {{ request()->routeIs('messages.*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-comments"></i>
                    <span>{{ __('dashboard.messages') }}</span>
                </a>
            </li>
        </ul>
    </nav>
    
    <!-- Top Navigation -->
    <nav id="top-nav" class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <button id="sidebarToggle" class="btn">
                <i class="fas fa-bars"></i>
            </button>
            
            <div class="d-flex align-items-center">
                <!-- Language Switcher -->
                <div class="dropdown me-3">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown">
                        <i class="fas fa-globe me-1"></i>
                        {{ app()->getLocale() == 'ar' ? 'العربية' : 'English' }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="{{ route('language.switch', 'en') }}">
                                <i class="fas fa-language me-2"></i> English
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('language.switch', 'ar') }}">
                                <i class="fas fa-language me-2"></i> العربية
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- User Dropdown -->
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown">
                        <span class="me-2 d-none d-sm-inline">{{ Auth::user()->name }}</span>
                        <i class="fas fa-user-circle fa-lg"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <!-- <li>
                            <a class="dropdown-item" href="{{ route('profile.show') }}">
                                <i class="fas fa-user me-2"></i>
                                {{ __('dashboard.profile') }}
                            </a>
                        </li> -->
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt me-2"></i>
                                    {{ __('dashboard.logout') }}
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <div id="main-content" class="fade-in">
        <div class="container-fluid py-4">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">@yield('title', __('dashboard.dashboard'))</h1>
                @hasSection('breadcrumb')
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        @yield('breadcrumb')
                    </ol>
                </nav>
                @endif
            </div>
            
            <!-- Content -->
            @yield('content')
        </div>
        
        <!-- Footer -->
        <footer id="main-footer" class="mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">
                        &copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('dashboard.all_rights_reserved') }}
                    </div>
                    <div>
                        <span class="text-muted">v{{ config('app.version', '1.0.0') }}</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    
    <!-- Custom Scripts -->
    <script>
        // Toggle sidebar
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });
        
        document.getElementById('sidebarClose').addEventListener('click', function() {
            document.getElementById('sidebar').classList.remove('show');
        });
        
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const toggleBtn = document.getElementById('sidebarToggle');
            
            if (window.innerWidth < 992 && 
                !sidebar.contains(event.target) && 
                !toggleBtn.contains(event.target) &&
                sidebar.classList.contains('show')) {
                sidebar.classList.remove('show');
            }
        });
        
        // Handle RTL/LTR specific adjustments
        function handleDirection() {
            if (document.documentElement.dir === 'rtl') {
                // RTL specific adjustments
            } else {
                // LTR specific adjustments
            }
        }
        
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            handleDirection();
        });
    </script>
    
    @yield('scripts')
</body>
</html>