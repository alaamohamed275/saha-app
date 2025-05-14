<section class="services-section">
        <div class="container-fluid p-0 m-0">
            <div class="row">
                <div class="col-lg-6 position-relative p-0 d-none d-lg-block">
                    <img src="/images/Rectangle 2.png" alt="تطبيق صيدلية Remedy" class="img-fluid w-70 h-70 object-fit-cover">
                    <div class="position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        <img src="/images/iphone.png" alt="تطبيق صيدلية Remedy" class="img-fluid" style="max-width: 100%;">
                    </div>
                </div>
                <div class="col-lg-6 text-end p-5">
                    <h2 class="section-heading fw-bold">خدماتنا</h2>
                    @foreach ($services as $service)
                    <div class="service-item mb-4">
                        <h5 class="mb-2">{{ $service->name }}</h5>
                        <p>{{ $service->description }}</p>
                  @endforeach
                </div>
            </div>
        </div>
     </section>