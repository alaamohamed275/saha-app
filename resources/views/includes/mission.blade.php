<section class="hero-section " id="home">
        
        <div class="container-fluid m-0 p-0">
            <div class="row">
                <div class="col-lg-6 p-5 text-end">
                    <h2 class="mb-4 section-heading fw-bold">رسالتنا</h2>
                    <p class="mb-4"> 
                        {{$about->message_description}}  
                    <div class="row">
                        <div class="col-lg-12 text-end">
                            <h2 class="section-heading fw-bold">قيمنا الأساسية</h2>
                            <p class="mb-5">{{$about->mission_description}}</p>
                              @foreach ( $missions as $mission)
                                    <div class="value-item">
                                        <h5 class="mb-2">{{$mission->name}}</h5>
                                        <p> {{$mission->description}}</p>
                                    </div> 
                              @endforeach
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/images/g1.png" alt="Remedy Hero Image" class="img-fluid w-50 object-fit-cover d-block me-auto">
                </div>
            </div>
        </div>
    </section>

    <style>
        
    </style>