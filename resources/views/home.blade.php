<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remedy Pharmacy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap');
        
        body {
            font-family: 'Tajawal', sans-serif;
            text-align: right;
        }
        
        .bg-remedy {
            background-color: #00A19A;
        }
        
        .text-remedy {
            color: #00A19A;
        }
        
        .bg-gray {
            background-color: #5A6270;
        }
        
        .bg-light-gray {
            background-color: #F5F5F5;
        }
        
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
        
        .object-fit-cover {
            object-fit: cover;
        }
        
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
        
        .services-triangle:after {
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
            padding: 0px 50;
            position: relative;
        }
        
        .green-circles {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 300px;
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
        
        .main-logo {
            height: 40px;
        }
        
        .section-heading {
            font-weight: 700;
            margin-bottom: 30px;
            color: #333;
        }
        
        .fw-bold {
            font-weight: 700 !important;
        }
        
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
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand ms-auto" href="#">
                <img src="/images/logo.png" alt="Remedy" class="main-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">التواصل</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">عنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#home">الرئيسية</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Mission -->
    <section class="hero-section " id="home">
        
        <div class="container-fluid m-0 p-0">
            <div class="row">
                <div class="col-lg-6 p-5 text-end">
                    <h2 class="mb-4 section-heading fw-bold">رسالتنا</h2>
                    <p class="mb-4">   
                    في Remedy، نؤمن بأن الصحة هي أساس الحياة، وأن كل فرد يستحق رعاية صحية آمنة، موثوقة، وفي متناول اليد. نكرّس جهودنا لتقديم خدمات صيدلانية بمعايير عالية من الاحتراف والاهتمام، من خلال توفير الأدوية الأصلية، والمنتجات الصحية الفعالة، والاستشارات الصيدلانية الدقيقة، مع الحرص على بناء علاقة ثقة طويلة الأمد مع عملائنا.
                        </p>
                    <div class="row">
                        <div class="col-lg-12 text-end">
                            <h2 class="section-heading fw-bold">قيمنا الأساسية</h2>
                            <p class="mb-5">في صيدلية Remedy، نلتزم بمجموعة من القيم التي تشكل أساس كل ما نقوم به وتوجه كل خطوة نخطوها نحو تقديم رعاية صحية موثوقة وإنسانية:</p>

                            <div class="value-item">
                                <h5 class="mb-2">1. الثقة:</h5>
                                <p>نؤمن أن الثقة تُبنى على الصدق والشفافية. ونعمل لنكون مصدراً موثوقاً لصحة عملائنا.</p>
                            </div>

                            <div class="value-item">
                                <h5 class="mb-2">2. الاهتمام الإنساني:</h5>
                                <p>إن كل من يعمل كصيدلي لا بد وأنه اختار هذا التخصص برغبته، ونتعامل مع عملائنا بعناية واحترام، لنكون شركاء حقيقيين في رحلته الصحية.</p>
                            </div>

                            <div class="value-item">
                                <h5 class="mb-2">3. الجودة:</h5>
                                <p>نلتزم بتقديم منتجات وخدمات ذات جودة عالية، مع الحرص على الالتزام بأعلى المعايير الصيدلانية والمهنية.</p>
                            </div>

                            <div class="value-item">
                                <h5 class="mb-2">4. المعرفة المستمرة:</h5>
                                <p>نطور أنفسنا باستمرار بمواكبة أحدث ما توصلت إليه العلوم الصيدلانية لنقدم استشارات دقيقة ومحدثة.</p>
                            </div>

                            <div class="value-item">
                                <h5 class="mb-2">5. المسؤولية المجتمعية:</h5>
                                <p>نؤمن بدورنا في دعم صحة المجتمع ونشارك في المبادرات التوعوية التي تساهم في تحسين نمط الحياة والصحة العامة.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/images/Rectangle15.png" alt="Remedy Hero Image" class="img-fluid w-70 h-70 object-fit-cover d-block me-auto">
                </div>
            </div>
        </div>
    </section>

  

     <!-- Services Section -->
     <section class="services-section">
        <div class="container-fluid p-0 m-0">
            <div class="row">
                <div class="col-lg-6 position-relative p-0">
                    <img src="/images/Rectangle 2.png" alt="تطبيق صيدلية Remedy" class="img-fluid w-70 h-70 object-fit-cover">
                    <div class="position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        <img src="/images/iphone.png" alt="تطبيق صيدلية Remedy" class="img-fluid" style="max-width: 100%;">
                    </div>
                </div>
                <div class="col-lg-6 text-end p-5">
                    <h2 class="section-heading fw-bold">خدماتنا</h2>

                    <div class="service-item mb-4">
                        <h5 class="mb-2">توفير الأدوية الأصلية:</h5>
                        <p>نوفر جميع أنواع الأدوية المعتمدة من وزارة الصحة، بما في ذلك الأدوية المزمنة والنادرة.</p>
                    </div>

                    <div class="service-item mb-4">
                        <h5 class="mb-2">الاستشارات الصيدلانية المجانية:</h5>
                        <p>فريقنا من الصيادلة الخبراء جاهز للإجابة على استفساراتك، ومساعدتك في استخدام الدواء بشكل آمن وفعّال.</p>
                    </div>

                    <div class="service-item mb-4">
                        <h5 class="mb-2">خدمة التوصيل المنزلي:</h5>
                        <p>نوصل طلبياتك بسرعة إلى باب منزلك، حرصاً على راحتك وسلامتك.</p>
                    </div>

                    <div class="service-item mb-4">
                        <h5 class="mb-2">منتجات العناية الشخصية والصحة:</h5>
                        <p>مجموعة واسعة من منتجات العناية بالبشرة، الشعر، والمكملات الغذائية من أفضل الماركات العالمية.</p>
                    </div>

                    <div class="service-item mb-4">
                        <h5 class="mb-2">قياس الضغط والسكر داخل الصيدلية:</h5>
                        <p>خدمات فحص سريعة ودقيقة لمساعدتك في متابعة حالتك الصحية.</p>
                    </div>

                    <div class="service-item mb-4">
                        <h5 class="mb-2">خدمة التحضير المسبق للروشتات:</h5>
                        <p>أرسل لنا صورتك الطبية عبر الواتساب أو التطبيق، ونجهزها لك قبل وصولك لتوفير وقتك.</p>
                    </div>
                </div>
            </div>
        </div>
     </section>


    <!-- Vision Section -->
    <section class="vision-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 ms-auto text-end">
                    <h2 class="section-heading fw-bold">رؤيتنا المستقبلية</h2>
                    <p>نسعى في Remedy أن نكون الوجهة الأولى للرعاية الصحية المجتمعية، من خلال تقديم خدمات صيدلانية متكاملة تركز على الثقة، الجودة، والاهتمام بالعميل. نحن نؤمن بأن كل دواء هو بداية لرحلة شفاء، وأن استشارة طبية في صيدلية تصنع فرق حقيقي في حياة الإنسان.</p>
                </div>
                <div class="col-lg-5">
                    <div class="green-circles">
                        <!-- <img src="/images/Ellipse4.png" alt="أشكال دائرية"> -->
                    </div>
                </div>
            </div>

        </div>
        <div>
            <img src="/images/Ellipse4.png" alt="أشكال دائرية">
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-3 text-end">
                    <div class="mb-3">
                        <img src="/images/logo.png" alt="logo " class="store-badge">
                    </div>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook-f "></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-md-3 text-end">
                    <h5 class="mb-3">تنزيل التطبيق</h5>
                    <div class="mb-3">
                        <img src="/images/AppleStore.png" alt="App Store" class="store-badge">
                    </div>
                    <div class="mb-3">
                        <img src="/images/PlaySotre.png" alt="Google Play" class="store-badge">
                    </div>
                </div>
                
                <div class="col-md-3 text-end">
                    <h5 class="mb-3">الشركة</h5>
                    <p><a href="#" class="text-white text-decoration-none">الرئيسية</a></p>
                    <p><a href="#" class="text-white text-decoration-none">خدماتنا</a></p>
                    <p><a href="#" class="text-white text-decoration-none">عنا</a></p>
                    <p><a href="#" class="text-white text-decoration-none">اتصل بنا</a></p>
                </div>
                <div class="col-md-3 text-end">
                    <h5 class="mb-3">الوصول إلينا</h5>
                    <p><i class="fas fa-phone me-2"></i> 0901234567890</p>
                    <p><i class="fas fa-envelope me-2"></i> info@example.com</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i> مصر</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <p class="mb-0">© 2025 جميع الحقوق محفوظة</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
