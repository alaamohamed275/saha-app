@extends('layouts.app')
@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap');
        
        body {
            margin: 0;
            padding: 0;
            font-family: 'Tajawal', sans-serif;
        }
        
        .header-container {
            width: 90%;
            background-image: url('/images/g4.png');
            background-size: contain;
            background-position: right;
            height: 600px;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: end;
            text-align: center;
            color: #000;
            padding: 0 20px;
            background-repeat: no-repeat;
        }
        
        .header-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
        }
        
        .remedy-logo {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #000;
        }
        
        .arabic-tagline {
            font-size: 1.8rem;
            margin-bottom: 5px;
            color: #e8c07d;
            font-weight: 500;
        }
        
        .arabic-subtagline {
            font-size: 4rem;
            margin-bottom: 30px;
            color: #000;
        }
        
        .contact-button {
            background-color: #1A998E;
            color: white;
            border: 2px solid white;
            padding: 12px 35px;
            font-size: 1.1rem;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            margin-top: 20px;
        }
        
        .mobile-header {
            display: none;
            padding: 20px;
            /* background-color: #f5f5f5; */
        }
        
        .mobile-header-content {
            text-align: center;
        }
        
        .mobile-remedy-logo {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #000;
        }
        
        .mobile-arabic-tagline {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: #e8c07d;
            font-weight: 500;
        }
        
        .mobile-contact-button {
            background-color: #1A998E;
            color: white;
            border: none;
            padding: 10px 25px;
            font-size: 1rem;
            border-radius: 30px;
            cursor: pointer;
            margin-top: 15px;
        }
        
        @media (max-width: 768px) {
            .header-container {
                display: none;
            }
            
            .mobile-header {
                display: block;
            }
            
            .nav-container {
                position: static;
                width: 100%;
                /* padding: 10px; */
                /* background-color: #fff; */
                /* box-shadow: 0 2px 5px rgba(0,0,0,0.1); */
            }
            
            .nav-menu {
                justify-content: center;
            }
            
            .nav-menu li {
                margin: 0 10px;
            }
            
            .nav-menu a {
                color: #333;
                font-size: 0.9rem;
            }
        }

        .contact-btn {
      background-color: #169C92;
      color: #fff;
      border: none;
      border-radius: 50px;
      padding: 10px 24px;
      font-size: 18px;
      font-weight: bold;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      transition: background-color 0.3s ease;
      text-decoration: none;
    }

    .contact-btn:hover {
      background-color: #12867f;
      color: #fff;
    }

    .arrow {
      font-size: 30px;
    }
    </style>

    <!-- Desktop Header -->
    <div class="header-container">
        <!-- Navigation -->
        <div class="nav-container">
          @include('includes.nav')
        </div>   
        <!-- Main Content -->
        <div class="header-content mt-5">
           <div class="remedy-logo">لان صحتك -Remedy </div>
            <div class="remedy-logo">تستحق الأفضل</div>
          <a href="{{ route('contact-info') }}" class="contact-btn">
              <span class="arrow">→</span>
            تواصل معنا
          
          </a>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="nav-container">
            @include('includes.nav')
        </div>
        <div class="mobile-header-content">
            <div class="mobile-remedy-logo">لان صحتك -Remedy</div>
            <div class="mobile-arabic-tagline">تستحق الأفضل</div>
            <button class="mobile-contact-button">تواصل معنا</button>
        </div>
    </div>

    <!-- Hero Section with Mission -->
    @include('includes.about')
    @include('includes.mission')

    <!-- Services Section -->
    @include('includes.services')

    <!-- Values Section -->
    @include("includes.vision")

    <!-- Footer -->
    @include('includes.footer')

@endsection