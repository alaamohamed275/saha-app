<footer class="footer pt-5 pb-3" id="contact">
    <div class="container">
        <div class="row gy-4">
            <!-- Logo & Social -->
            <div class="col-md-6 col-lg-3 text-md-end text-center">
                <img src="{{ asset('storage/' . $about->logo) }}" alt="logo" class="store-badge mb-3">
                <div class="social-icons mt-3">
                    <a href="{{$contact->facebook}}"><i class="fab fa-facebook-f me-2"></i></a>
                    <a href="{{$contact->instagram}}"><i class="fab fa-instagram me-2"></i></a>
                    <a href="{{$contact->twitter}}"><i class="fab fa-twitter me-2"></i></a>
                    <a href="{{$contact->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- App Download -->
            <div class="col-md-6 col-lg-3 text-md-end text-center">
                <h5 class="mb-3">تنزيل التطبيق</h5>
                <div class="mb-3">
                    <img src="/images/AppleStore.png" alt="App Store" class="store-badge">
                </div>
                <div>
                    <img src="/images/PlaySotre.png" alt="Google Play" class="store-badge">
                </div>
            </div>

            <!-- Company Links -->
            <div class="col-md-6 col-lg-3 text-md-end text-center">
                <h5 class="mb-3">الشركة</h5>
                <p><a href="{{ route('home') }}" class="text-white text-decoration-none">الرئيسية</a></p>
                <p><a href="{{ route('about') }}" class="text-white text-decoration-none">عنا</a></p>
                <p><a href="{{ route('contact-info') }}" class="text-white text-decoration-none">اتصل بنا</a></p>
            </div>

            <!-- Contact Info -->
            <div class="col-md-6 col-lg-3 text-md-end text-center">
                <h5 class="mb-3">الوصول إلينا</h5>
                <p><i class="fas fa-phone me-2"></i> {{$contact->phone}}</p>
                <p><i class="fas fa-envelope me-2"></i>{{$contact->email}}</p>
                <p><i class="fas fa-map-marker-alt me-2"></i> {{$contact->address}}</p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 text-center">
                <p class="mb-0">© 2025 جميع الحقوق محفوظة</p>
            </div>
        </div>
    </div>
</footer>