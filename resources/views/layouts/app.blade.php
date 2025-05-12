<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap');

        body {
            font-family: 'Tajawal', sans-serif;
            text-align: right;
        }

        .bg-remedy { background-color: #00A19A; }
        .text-remedy { color: #00A19A; }
        .bg-gray { background-color: #5A6270; }
        .bg-light-gray { background-color: #F5F5F5; }

        .hero-section {
            background-color: #fff;
            min-height: 400px;
            position: relative;
            overflow: hidden;
        }

        .gray-circle {
            background-color: #5A6270;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            position: absolute;
            left: -150px;
            top: -100px;
            z-index: 1;
        }

        .small-circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            position: absolute;
        }

        .circle-1 {
            background-color: #ADE1E5;
            left: 100px;
            top: 140px;
        }

        .circle-2 {
            background-color: #00A19A;
            left: 50px;
            bottom: 80px;
        }

        .values-section h3 {
            margin-bottom: 30px;
        }

        .value-item {
            margin-bottom: 20px;
        }

        .object-fit-cover { object-fit: cover; }

        .services-section {
            background-color: white;
            position: relative;
            padding: 0;
            overflow: hidden;
        }

        .services-triangle {
            position: absolute;
            width: 100%;
            height: 200px;
            bottom: 0;
            right: 0;
            overflow: hidden;
        }

        .services-triangle::after {
            content: "";
            background-color: #00A19A;
            position: absolute;
            width: 100%;
            height: 100%;
            transform: skewY(-10deg);
            bottom: -50%;
            right: -50%;
        }

        .vision-section {
            /* padding: 0px 50px; */
            position: relative;
        }

        .green-circles {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 500px;
        }

        .footer {
            background-color: #5A6270;
            color: white;
            padding: 30px 0;
        }

        .store-badge {
            width: 120px;
            margin-bottom: 10px;
        }

        .service-icon {
            font-size: 24px;
            color: #00A19A;
            margin-bottom: 15px;
        }

        .main-logo { height: 100px; }

        .section-heading {
            font-weight: 700;
            margin-bottom: 30px;
            color: #333;
        }

        .fw-bold { font-weight: 700 !important; }

        .app-screens {
            max-width: 100%;
            height: auto;
        }

        .navbar {
            background-color: transparent !important;
        }

        .nav-link {
            color: #333 !important;
            font-weight: 500;
        }

        .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 18px;
        }

        @media (max-width: 768px) {
    .vision-section h2 {
        font-size: 1.5rem;
    }

    .store-badge {
        width: 120px;
    }

    .social-icons a {
        font-size: 1.2rem;
        margin: 0 5px;
    }
}
    </style>
</head>
<body>
    <div id="app">
          <!--   <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
    </nav> -->

        <main class="">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

