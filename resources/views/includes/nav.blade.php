<nav class="navbar navbar-expand-lg navbar-light bg-white me-auto">
    <div class="container-fluid">
        {{-- Logo on the right side for RTL --}}
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('storage/' . $about->logo) }}" alt="{{ config('app.name') }}" class="logo" style="max-height: 60px;">
        </a>
        
        {{-- Toggler Button --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        {{-- Navigation Links --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        الرئيسية
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        عنا
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  fw-bold {{ request()->routeIs('contact-info') ? 'active' : '' }}" href="{{ route('contact-info') }}">
                        التواصل
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
.nav-link {
    transition: color 0.3s ease;
}

.nav-link.active {
    color: #00a89d !important;
    font-weight: bold;
    /* border-bottom: 2px solid #00a89d; */
}

.navbar-brand {
    margin-right: 0;
    margin-left: auto;
}

.navbar-toggler {
    margin-right: auto;
    margin-left: 0;
}
</style>