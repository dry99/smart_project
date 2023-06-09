@extends('template')

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid  p-0 mb-0 mb-lg-5 wow fadeIn" data-wow-delay="0.1s">

        <div id="header-carousel" class="carousel slide carousel-fade d-none d-lg-block" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="/img/carousel-1.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <!-- <p
                                        class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                        Welcome to Finanza</p> -->
                                    <!--  <h3 class="display-1 mb-4 "></h3>-->
                                    
                                    <div>
                                        <h1 class="myh1 animated slideInDown">Smart Technologies <br>
                                            <hr class="w-25" style="height: 10px; color: #e11d5b; opacity: 100%;">
                                            <span
                                                class="txt-rotate"
                                                data-period="2000"
                                                data-rotate='["Un Partenaire fiable.", "Des Solutions fiable.","Sécurité & flexibilité" ]'>
                                            </span>
                                        </h1>
                                        <!-- <h2 class="myh2">A single &lt;span&gt; is all you need.</h2> -->
                                    </div>
                                    <a href="smart-technologies" class="btn btn-primary py-3 px-5 animated slideInDown">Qui somme nous ?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide d-lg-none d-block" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-dark" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-dark" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg-dark" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="/img/carousel-4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/img/carousel-5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/img/carousel-3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Features Start -->
    <div class="container-xxl feature py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Why Choosing Us!</p> -->
                    <h1 class="display-5 mb-4">DÉCOUVREZ LES SOLUTIONS CLOUD ADAPTÉES À VOTRE ENTREPRISE</h1>
                    <p class="mb-4">
                        L’amélioration de la productivité de nos clients Entreprise par le déploiement des solutions fiables, performantes et ce, avec un rapport Qualité/Prix défiant toute concurrence.
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="">Découvrir nos offres</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Sécurité - Mobilité - Collaboratif</h4>
                                        <p class="mb-3">Combinez la gamme Office à des produits simples permettant d'augmenter votre productivité, en sécurité.</p>
                                        <a class="fw-semi-bold" href="">En savoir plus <i
                                                class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Pilotage des données - Automatisation des process</h4>
                                        <p class="mb-3">
                                            Prenez des décisions éclairées et automatisez vos tâches à faible valeur ajoutée
                                        </p>
                                        <a class="fw-semi-bold" href="">En savoir plus <i
                                                class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-window-restore fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Solution ERP - CRM - RH</h4>
                                <p class="mb-3">Solution CRM et ERP collaboratif, dans le cloud, nativement connecté à Office 365 </p>
                                <a class="fw-semi-bold" href="">En savoir plus<i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">25000</h1>
                    <span class="fs-5 text-white">Utilisateurs</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-check fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">134</h1>
                    <span class="fs-5 text-white">Projets Completer</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 text-white">Experts</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-award fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">10</h1>
                    <span class="fs-5 text-white">ans d'expérience</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div>
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="/img/smart_site.png">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Pourquoi Smart Technologies ?</p>
                    <h1 class="display-5 mb-4">Smart Technologies, un partenaire certifié Microsoft Gold</h1>
                    <p class="mb-4">
                        <b>Smart Technologies</b> est une société Microsoft Gold Partner implantée en Côte d’Ivoire.
                        Nous sommes un fournisseur complet de solutions d’affaires Microsoft, offrant des services de bout en bout 
                        pour tous vos besoins logiciels. Nous fournissons une gamme de solutions Microsoft Dynamics ERP, CRM et Business Intelligence
                        &nbsp;&nbsp;
                        <a href="#" class="">Lire la suite <i class="fa fa-arrow-alt-circle-right"></i></a>
                        
                        <div class="p-4 wow fadeInUp align-content-center text-center" data-wow-delay="0.1s">
                            <div class="row text-center align-content-center">
                                <div class="col-lg-4 fadeIn align-center text-center" data-wow-delay="0.3s">
                                    <h4><i class="fa fa-users text-primary"></i> <br> Un support client expérimenté</h4>
                                </div>
                                <div class="col-lg-4 wow fadeIn align-content-center text-center" data-wow-delay="0.5s">
                                    <h4> <i class="fa fa-phone text-primary"></i> <br> A votre écoute 24h/24 & 7jrs/7 </h4>
                                </div>
                                <div class="col-lg-4 wow fadeInUp align-content-center text-center" data-wow-delay="0.7s">
                                    <h4><i class="fa fa-users text-primary"></i> <br> Des partenaires solides pour vous satisfaire</h4>
                                </div>
                            </div>    
                        </div>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    

    <!-- 
        <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-times text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h4>No Hidden Cost</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                            <div class="border-end d-none d-lg-block"></div>
                        </div>
                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Dedicated Team</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                            <div class="border-end d-none d-lg-block"></div>
                        </div>
                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h4>24/7 Available</h4>
                                <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    -->

    


    <!-- Service Start 
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Our Services</p>
                <h1 class="display-5 mb-5">Awesome Financial Services For Business</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Financial Planning</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Cash Investment</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Financial Consultancy</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i>Business Loans</h5>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="/img/service-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                        clita duo justo erat amet.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="/img/service-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                        clita duo justo erat amet.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="/img/service-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                        clita duo justo erat amet.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="/img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">25 Years Of Experience In Financial Support</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                        clita duo justo erat amet.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Secured Loans</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Credit Facilities</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Cash Advanced</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    


@endsection