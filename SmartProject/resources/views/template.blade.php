<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Smart Technologies</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/img/logo_smart.png" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>Immeuble Jeceda 01 BP 7947 Abidjan 01 Avenue de la République, Abidjan Côte d’Ivoire</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>info@smartechnologies.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>(+225) 20 21 74 42 // (+225) 20 21 78 15</small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn " data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-1 ms-lg-0">
                <!-- <h1 class="display-5 text-primary m-0">Finanza</h1> -->
                <img class="img img-fluid w-50 p-0" src="/img/logo_smart.png" alt="Logo Smart Technologies" srcset="">
            </a>
            <button type="button" class="navbar-toggler me-1" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link active">Accueil</a>
                    <a href="smart-technologies" class="nav-item nav-link">Smart Technologies</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Solutions</a>
                        <div class="dropdown-menu border-light m-0">
                            <a href="solutions/collaboration" class="dropdown-item">Solution collaborative</a>
                            <a href="solutions/gestion" class="dropdown-item">Solution de gestion</a>
                            <a href="solutions/Internet" class="dropdown-item">Solution IT</a>
                            <a href="solutions/Cloud" class="dropdown-item">Solution Cloud</a>
                            
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu border-light m-0">
                            <a href="services/infogerence" class="dropdown-item">Infogérance Audit/Conseil</a>
                            <a href="services/Contrat-de-support" class="dropdown-item">Contrat de support</a>
                            <a href="services/Integration-Migration" class="dropdown-item">Intégration / Migration</a>
                           <!--  <a href="services/Etudes-des-processus" class="dropdown-item">Etude des processus opérationnels</a>
                            <a href="services/Ressources-dediees" class="dropdown-item">Ressources dédiées</a> -->
                        </div>
                    </div>
                    <a href="contact" class="nav-item nav-link">Contactez-nous</a>
                    <!-- <a href="contact.html" class="nav-item nav-link">Réalisations</a> -->
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <!-- <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-facebook-f text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-twitter text-primary"></small>
                    </a> -->
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-linkedin-in text-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @yield('content');

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <!-- <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Testimonial</p> -->
                <h1 class="display-5 mb-5">Ils nous font confiance</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item">
                    <img class="rounded-circle mb-3" src="/img/partenaire/cinergie.png" alt="">
                    <h4>CI ENERGIE</h4>
                    <span>Côte d'Ivoire</span>
                </div>
                <div class="testimonial-item">
                    <img class="rounded-circle mb-3" src="/img/partenaire/capro.png" alt="">
                    <h4>Capro Agro Industries</h4>
                    <span>Côte d'Ivoire</span>
                </div>
                <div class="testimonial-item">
                    <img class="rounded-circle mb-3" src="/img/partenaire/lualaba.png" alt="">
                    <h4>Lualaba Oil and Gaz</h4>
                    <span>Congo</span>
                </div>
                <div class="testimonial-item">
                    <img class="rounded-circle mb-3" src="/img/partenaire/Puma.png" alt="">
                    <h4>Puma Energie</h4>
                    <span>Côte d'Ivoire</span>
                </div>
                <div class="testimonial-item">
                    <img class="rounded-circle mb-3" src="/img/partenaire/tulipe.png" alt="">
                    <h4>La tulipe food</h4>
                    <span>Côte d'Ivoire</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Callback Start -->
    <div class="container-fluid callback my-5 pt-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <h1 class="display-5 mb-5">Contactez-nous</h1>
                        </div>
                        <form action="{{route('SendEmail')}}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                        <label for="name">Nom & prénoms</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="mail" placeholder="Your Email">
                                        <label for="mail">Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="phone" id="mobile" placeholder="Your Mobile">
                                        <label for="mobile">Téléphone</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="objet" id="subject" placeholder="Subject">
                                        <label for="subject">Objet</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Callback End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Nos coordonnées</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Immeuble Jeceda 01 BP 7947 Abidjan 01 Avenue de la République, Abidjan Côte d’Ivoire</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(+225) 20 21 74 42 <br> &nbsp; (+225) 20 21 78 15</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@smartechnologies.com</p>
                    <div class="d-flex pt-2">
                        <!-- <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a> -->
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Liens</h4>
                    <a class="btn btn-link" href="Smart-technologies">Qui somme nous ?</a>
                    <a class="btn btn-link" href="">Nos services & solutions</a>
                    <!-- <a class="btn btn-link" href="">Business Loans</a>
                    <a class="btn btn-link" href="">Business Analysis</a> -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-4">Nos partenaires</h4>
                    <!-- <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a> -->
                    <div class="row">
                        <div class="col-6 col-lg-4 p-1  "><img class="w-75 " src="/img/partenaire/microsft-partner.png" alt="microsft logo"></div>
                        <div class="col-6 col-lg-4 p-1  "><img class="w-75 " src="/img/partenaire/sophos.png" alt="sophos logo"></div>
                        <div class="col-6 col-lg-4 p-1  "><img class="w-75 " src="/img/partenaire/symantec.png" alt="symantec logo"></div>
                        <div class="col-6 col-lg-4 p-1  "><img class="w-75 " src="/img/partenaire/cisco-partner.png" alt=""></div>
                        <div class="col-6 col-lg-4 p-1  "><img class="w-75 " src="/img/partenaire/fortinet.png" class="w-100" alt="fortinet logo"></div>
                        <div class="col-6 col-lg-4 p-1  "><img class="w-75 " src="/img/partenaire/kaspersky.png" alt="kaspersky logo"></div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
<!--     <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
 -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript --><!--
    <script src="ressourcesjs/main.js"></script>  -->

    <script src="/js/main.js"></script>
</body>

</html>