<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ __('dashboard.dashboard') }}</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- RTL Bootstrap if Arabic -->
    @if(app()->getLocale() == 'ar')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    @endif
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #1cc88a;
            --accent-color: #36b9cc;
            --dark-color: #5a5c69;
            --light-color: #f8f9fc;
            --danger-color: #e74a3b;
            --warning-color: #f6c23e;
        }
        
        body {
            font-family: 'Nunito', sans-serif;
            background-color: var(--light-color);
        }
        
        /* Sidebar */
        #sidebar-wrapper {
            min-height: 100vh;
            width: 250px;
            transition: margin 0.25s ease-out;
            background: linear-gradient(180deg, var(--primary-color) 0%, #224abe 100%);
            color: white;
            position: fixed;
            z-index: 1000;
        }
        
        /* RTL sidebar positioning */
        html[dir="ltr"] #sidebar-wrapper {
            left: 0;
        }
        
        html[dir="rtl"] #sidebar-wrapper {
            right: 0;
        }
        
        #sidebar-wrapper .sidebar-heading {
            padding: 1.2rem 1rem;
            font-size: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        #sidebar-wrapper .list-group {
            width: 100%;
        }
        
        .sidebar-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 1rem;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .sidebar-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .sidebar-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            border-left: 4px solid white;
        }
        
        html[dir="rtl"] .sidebar-link.active {
            border-left: none;
            border-right: 4px solid white;
        }
        
        .sidebar-link i {
            margin-right: 0.75rem;
            width: 20px;
            text-align: center;
        }
        
        html[dir="rtl"] .sidebar-link i {
            margin-right: 0;
            margin-left: 0.75rem;
        }
        
        /* Main Content */
        #page-content-wrapper {
            min-width: 100vw;
            padding: 0;
            transition: margin-left 0.25s ease-out;
        }
        
        html[dir="ltr"] #page-content-wrapper {
            margin-left: 250px;
        }
        
        html[dir="rtl"] #page-content-wrapper {
            margin-right: 250px;
            margin-left: 0;
        }
        
        /* Navbar */
        .top-navbar {
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }
        
        .navbar-search .input-group {
            width: 300px;
        }
        
        /* Cards */
        .dashboard-card {
            border-radius: 0.35rem;
            border: none;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
        }
        
        /* Footer */
        footer {
            background-color: white;
            padding: 1rem;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.05);
        }
        
        /* Language switcher */
        .lang-switcher {
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        
        .lang-switcher:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            html[dir="ltr"] #sidebar-wrapper {
                margin-left: -250px;
            }
            
            html[dir="rtl"] #sidebar-wrapper {
                margin-right: -250px;
            }
            
            html[dir="ltr"] #page-content-wrapper {
                margin-left: 0;
            }
            
            html[dir="rtl"] #page-content-wrapper {
                margin-right: 0;
            }
            
            html[dir="ltr"] #sidebar-wrapper.show {
                margin-left: 0;
            }
            
            html[dir="rtl"] #sidebar-wrapper.show {
                margin-right: 0;
            }
            
            .navbar-search .input-group {
                width: 100%;
            }
        }
    </style>
    
    @yield('css')
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="border-end" id="sidebar-wrapper">
            <div class="sidebar-heading">{{ __('dashboard.app_name') }}</div>
            <div class="list-group list-group-flush">
                <a href="{{ route('dashboard') }}" class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt"></i> {{ __('dashboard.dashboard') }}
                </a>
                <a href="{{ route('users.index') }}" class="sidebar-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
                    <i class="fas fa-users"></i> {{ __('dashboard.users') }}
                </a>
                <a href="{{ route('about-us.index') }}" class="sidebar-link {{ request()->routeIs('about-us.*') ? 'active' : '' }}">
                    <i class="fas fa-box"></i> {{ __('dashboard.about-us') }}
                </a>
                <a href="{{ route('contact.create') }}" class="sidebar-link {{ request()->routeIs('contact.*') ? 'active' : '' }}">
                    <i class="fas fa-shopping-cart"></i> {{ __('dashboard.contact') }}
                </a>
                <a href="{{ route('services.index') }}" class="sidebar-link {{ request()->routeIs('services.*') ? 'active' : '' }}">
                    <i class="fas fa-chart-line"></i> {{ __('dashboard.services') }}
                </a>
                <a href="{{ route('messages.create') }}" class="sidebar-link {{ request()->routeIs('messages.*') ? 'active' : '' }}">
                    <i class="fas fa-cog"></i> {{ __('dashboard.messages') }}
                </a>
            </div>
        </div>
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- Top Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light top-navbar py-3">
                <div class="container-fluid">
                    <button class="btn btn-link" id="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    
                    <div class="d-none d-md-block">
                        <div class="input-group navbar-search">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="{{ __('dashboard.search_placeholder') }}" aria-label="Search">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    
                    <ul class="navbar-nav m-auto">
                        <!-- Language Switcher -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="langDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @if(app()->getLocale() == 'en')
                                <i class="fas fa-globe"></i> English
                                @else
                                <i class="fas fa-globe"></i> العربية
                                @endif
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('language.switch', 'en') }}">
                                        English
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('language.switch', 'ar') }}">
                                        العربية
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <!-- Notifications Dropdown -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge bg-danger badge-counter">3+</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationsDropdown">
                                <li><h6 class="dropdown-header">{{ __('dashboard.notifications_center') }}</h6></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-primary text-white rounded-circle p-2">
                                                <i class="fas fa-file-alt"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 12, 2023</div>
                                            <span>{{ __('dashboard.new_report_available') }}</span>
                                        </div>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">
                                        {{ __('dashboard.show_all_notifications') }}
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        
                        <!-- User Information -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-lg-inline text-gray-600 me-2">{{ auth()->user()->name ?? 'User Name' }}</span>
                                <!-- <img class="img-profile rounded-circle" width="32" height="32" src="{{ asset('img/undraw_profile.svg') }}"> -->
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('profile.show') }}">
                                        <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>
                                        {{ __('dashboard.profile') }}
                                    </a>
                                </li>
                              
                                <li>
                                    <a class="dropdown-item" href="{{ route('logs.index') }}">
                                        <i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>
                                        {{ __('dashboard.activity_log') }}
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>
                                            {{ __('dashboard.logout') }}
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <!-- Main Content -->
            <div class="container-fluid pt-4 px-4">
                @yield('content')
            </div>
            
            <!-- Footer -->
            <footer class="mt-5 text-center position-relative bottom-0">
                <div class="container">
                    <span>&copy; {{ date('Y') }} {{ __('dashboard.app_name') }}. {{ __('dashboard.all_rights_reserved') }}</span>
                </div>
            </footer>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
    
    <script>
        // Toggle sidebar
        document.getElementById('menu-toggle').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('sidebar-wrapper').classList.toggle('show');
        });
        
        // Close sidebar on small screens when clicking outside
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar-wrapper');
            const menuToggle = document.getElementById('menu-toggle');
            
            if (window.innerWidth < 768 && 
                !sidebar.contains(event.target) && 
                !menuToggle.contains(event.target) &&
                sidebar.classList.contains('show')) {
                sidebar.classList.remove('show');
            }
        });
    </script>
    
    @yield('scripts')
</body>
</html>