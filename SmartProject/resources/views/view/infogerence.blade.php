@extends('template')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="/">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Infogerence</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-4 align-items-end mb-4">
            <div class="col-12 text-center">
                <h1 class="display-5"></h1>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="img/infogerance.png">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-5 mb-4">INFOGÉRANCE AUDIT/CONSEIL</h1>
                <p class="mb-4 justify-content-center" style="line-height: 25px;">
                Confiez-nous la gestion de votre S.I en vous concentrant sur votre métier.
                Bénéficiez de notre accompagnement qui va au-delà de l’intégration de vos projets. Notre relation de partenariat s’inscrit dans la durée mais aussi dans un processus continu de mise en adéquation de votre système
                d’information avec votre environnement
                Notre accompagnement est personnalisable selon vos exigences et contribue à garantir la performance de votre système d’information et de production.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



<!-- Facts Start -->
<div class="container-fluid facts my-5 py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-12 text-center">
                <h1 class="text-white">Vous en tirez de nombreux bénéfices</h1>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-users fa-3x text-white mb-3"></i><br>
                <span class="fs-5 h1 text-white">Anticipation & Efficacité</span>
                <hr class="bg-white w-25 mx-auto mb-0">
                <span class="text-white">
                    Vous anticipez vos situations de blocage et assurez à vos collaborateurs une disponibilité et 
                    une rentabilité accrue de votre système d’information.
                </span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users fa-3x text-white mb-3"></i><br>
                <span class="fs-5 h1 text-white">Optimisation</span>
                <hr class="bg-white w-25 mx-auto mb-0">
                <span class="text-white">
                    Vous optimisez vos coûts grâce à des tarifs préférentiels par rapport à l’achat d’interventions 
                    ponctuelles et vous budgétisez plus facilement vos tarifs récurrents de prestations de services.
                </span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users fa-3x text-white mb-3"></i><br>
                <span class="fs-5 h1 text-white">Disponibilité</span>
                <hr class="bg-white w-25 mx-auto mb-0">
                <span class="text-white">
                    Vous bénéficiez d’une garantie de disponibilité de votre système adaptée à vos attentes.
                </span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-users fa-3x text-white mb-3"></i><br>
                <span class="fs-5 h1 text-white">Prise en charge rapide </span>
                <hr class="bg-white w-25 mx-auto mb-0">
                <span class="text-white">
                Vos difficultés sont prises en charge par nos collaborateurs experts sur les technologies que vous utilisez. 
                Ils interviennent chez vous ou à distance, en fonction de l’incident que vous rencontrez. 
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- About Start -->
<div class="container-fluid py-1">
    <div class="container">
        <div class="row g-4 align-items-end mb-4">
            <div class="col-12 text-center">
                <h1 class="display-5"></h1>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-5 mb-4">Smart Technologies vous accompagne</h1>
                <p class="mb-4 justify-content-center" style="line-height: 25px;">
                Nous mettons toutes nos compétences métiers, fonctionnelles et techniques à votre service pour vous accompagner 
                dans l’exploitation quotidienne et future de votre système d’information. Pour cela, nous vous proposons 
                différents niveaux de prestations de support couvrant l’ensemble de nos offres : <br>
                    <i class="fa fa-check text-primary mb-3"></i><b> Tiers Maintenance Applicative sur Microsoft Dynamics 365, ERP et CRM ;</b><br>
                    <i class="fa fa-check text-primary mb-3"></i><b> Assistance et support sur le parc informatique ;</b><br>
                    <i class="fa fa-check text-primary mb-3"></i><b> Administration des datacenters internes.</b><br>
                </p>
            </div>
            <div class="col-lg-6 wow fadeInUp text-center" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="img/work.png">
            </div>
        </div>
    </div>
</div>

@endsection