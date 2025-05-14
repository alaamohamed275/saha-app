@extends('layouts.app')
@section('content')
    <style>
        :root {
            --remedy-primary: #00a89d;
            --remedy-secondary: #dbeef0;
        }
        .bg-remedy-primary {
            background-color: var(--remedy-primary);
        }
        .bg-remedy-secondary {
            background-color: var(--remedy-secondary);
        }
        .text-remedy-primary {
            color: var(--remedy-primary);
        }
        .btn-remedy {
            background-color: var(--remedy-primary);
            color: white;
        }
        .btn-remedy:hover {
            background-color: #018a81;
            color: white;
        }
        .contact-section {
            background-color: #fff;
            position: relative;
            overflow: hidden;
        }
        .decoration-circle {
            position: absolute;
            border-radius: 50%;
            z-index: 0;
        }
        .yellow-circle {
            width: 150px;
            height: 150px;
            background-color: rgba(255, 241, 118, 0.7);
            top: 0%;
            right: 5%;
        }
        .light-blue-circle {
            width: 100px;
            height: 100px;
            background-color: rgba(173, 233, 242, 0.7);
            bottom: 0%;
            left: 5%;
        }
        .purple-circle {
            width: 70px;
            height: 70px;
            background-color: rgba(219, 213, 252, 0.7);
            top: 0%;
            left: 20%;
        }
        .navbar-brand img {
            height: 60px;
        }
        .contact-form-container {
            z-index: 1;
            position: relative;
            background-color: var(--remedy-secondary);
            overflow: hidden;
        }

        .form-control {
            padding:0.6rem .75rem;
        }
         .rounded-circle{
            border-radius: 30% !important;
        }
    </style>

    <!-- Navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://via.placeholder.com/150x40/00a89d/FFFFFF?text=Remedy" alt="Remedy Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">عنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold active" href="#">التواصل</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    @include('includes.nav')
    <!-- Contact Section with Decorative Elements -->
    <section class="contact-section mt-5 pt-5">
        <!-- Decorative circles -->
        <div class="decoration-circle yellow-circle"></div>
        <div class="decoration-circle light-blue-circle"></div>
        <div class="decoration-circle purple-circle"></div>
        
        <div class="container-fluid ">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-5">تواصل معنا اليوم</h2>
            </div>
            
            <div class="row justify-content-center contact-form-container">
                <div class="col-lg-10">
                    <div class=" overflow-hidden">
                        <div class="row g-0">
                          
                            
                            <!-- Contact Form Column -->
                            <div class="col-md-8">
                                <div class=" p-4 p-lg-5">
                                    <h3 class="fw-bold mb-4 text-end">أرسل لنا رسالة</h3>
                                    <p class="text-muted text-end mb-4">سوف نقوم بالرد عليك في أقرب وقت ممكن</p>
                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('messages.store') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="name">الاسم</label>
                                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="company">الشركة</label>
                                            <input type="text" name="company" class="form-control" value="{{ old('company') }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email">البريد الإلكتروني</label>
                                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone">رقم الهاتف</label>
                                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="subject">الموضوع</label>
                                            <input type="text" name="subject" class="form-control" value="{{ old('subject') }}" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="message">الرسالة</label>
                                            <textarea name="message" class="form-control" rows="5" required>{{ old('message') }}</textarea>
                                        </div>

                                       <button type="submit" class="btn btn-remedy w-100 py-3 fw-bold">إرسال</button>
                                    </form>
                                </div>
                            </div>

                          <!-- Contact Information Column -->
                            <div class="col-md-4 text-dark">
                                <div class="d-flex flex-column justify-content-center h-100 p-3">
                                    <h3 class="mb-4 fw-bold">معلومات التواصل</h3>

                                    <div class="mb-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="rounded-circle bg-remedy-primary d-flex justify-content-center align-items-center ms-2" style="width: 40px; height: 40px;">
                                                <i class="fas fa-phone text-white"></i>
                                            </div>
                                            <span>{{ $contact->phone }}</span>
                                        </div>

                                        <div class="d-flex align-items-center mb-3">
                                            <div class="rounded-circle bg-remedy-primary d-flex justify-content-center align-items-center ms-2" style="width: 40px; height: 40px;">
                                                <i class="fas fa-envelope text-white"></i>
                                            </div>
                                            <span>{{ $contact->email }}</span>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-remedy-primary d-flex justify-content-center align-items-center ms-2" style="width: 40px; height: 40px;">
                                                <i class="fas fa-map-marker-alt text-white"></i>
                                            </div>
                                            <span>{{ $contact->address }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.footer')

@endsection