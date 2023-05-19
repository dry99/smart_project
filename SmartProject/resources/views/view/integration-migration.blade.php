@extends('template')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Intégration & Migration</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-4  align-items-center ">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-primary">Imaginez les possibilités infinies avec nos services d’intégration</h1>
                <hr class="text-primary w-50" style="height:10px;">
                <p>
                    Augmentez le niveau de votre service et de vos capacités grâce à l’intégration
                </p>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row">
                    <div class="col-lg-6 row">
                        <div class="col-12">
                            <i class="fa fa-mobile fa-3x" aria-hidden="true"></i>
                            <span class="h5">Applications mobiles</span class="h5">
                        </div>
                        <p>Utilisez vos appareils mobiles pour accéder en temps réel aux données du projet, aux informations client et plus encore</p>

                    </div>
                    <div class="col-lg-6 row">
                        <div class="col-12">
                            <i class="fa fa-cart-arrow-down fa-3x" aria-hidden="true"></i>
                            <span class="h5">Accès e-commerce</span>
                        </div>
                        <p>De l’inventaire aux ventes, gardez toutes vos données de produits et de services synchronisées.</p>
                    </div>
                    <div class="col-lg-6 row">
                        <div class="col-12">
                            <i class="fa fa-comments fa-3x" aria-hidden="true"></i>
                            <span class="h5">Amélioration de la communication</span>
                        </div>
                        <p>Maintenez votre organisation connectée avec un système intégré.</p>
                    </div>
                    <div class="col-lg-6 row">
                        <div class="col-12">
                            <i class="fa fa-microchip fa-3x" aria-hidden="true"></i>
                            <span class="h5">Applications métier personnalisées</span>
                        </div>
                        <p>Applications métier personnalisées</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<div class="container-fluid facts my-5 py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <h1 class="text-white">Migration fluide, sécurisée et transparente vers D365 Business Central</h1>
                <hr class="text-white w-50" style="height:10px;">
                <span class="text-white">
                    Si votre solution CRM/ERP existante ne répond plus aux besoins uniques de votre entreprise, il est temps de migrer.
                    La migration de votre solution Microsoft existante vous aidera à moderniser votre façon de faire des affaires.
                    <br> <br>
                    Chez <b>Smart Technologies</b>, nous rendons Microsoft Dynamics 365 Data Migration sans stress et ne manquons jamais de nouvelles fonctionnalités. Laissez nos experts chevronnés vous aider à optimiser votre parcours de migration.
                </span>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 p-3">
                        <div class="row bg-white border rounded p-1">
                            <div class="col-12 ">
                                <i class="fa fa-mobile fa-3x" aria-hidden="true"></i>
                                <span class="h5">Mises à jour automatisées</span class="h5">
                            </div>
                            <p>Ne manquez jamais les nouvelles fonctionnalités</p>
                        </div>
                    </div>

                    <div class="col-lg-6 p-3">
                        <div class="row bg-white border rounded p-1">
                            <div class="col-12 ">
                                <i class="fa fa-mobile fa-3x" aria-hidden="true"></i>
                                <span class="h5">Flexibilité accrue</span class="h5">
                            </div>
                            <p>Optimisez les performances et obtenez un accès où que vous soyez</p>
                        </div>
                    </div>

                    <div class="col-lg-6 p-3">
                        <div class="row bg-white border rounded p-1">
                            <div class="col-12 ">
                                <i class="fa fa-mobile fa-3x" aria-hidden="true"></i>
                                <span class="h5">Intelligence opérationnelle</span class="h5">
                            </div>
                            <p>Prendre des décisions commerciales basées sur de meilleures données et informations</p>
                        </div>
                    </div>


                    <div class="col-lg-6 p-3">
                        <div class="row bg-white border rounded p-1">
                            <div class="col-12 ">
                                <i class="fa fa-mobile fa-3x" aria-hidden="true"></i>
                                <span class="h5">Restez concentré et persévérant</span class="h5">
                            </div>
                            <p>Une technologie qui vous permet d’innover et de générer un retour sur investissement</p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>   
<!-- About Start -->
<div class="container-fluid py-1">
    <div class="container">
        <div class="row g-4 align-items-end mb-1">

            <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s">
                <img class="img-fluid rounded w-25" src="img/smart_site.png">
            </div>
            <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.3s">
                <h1 class="display-5 mb-4">Découvrez notre modèle de migration</h1>
                <span>Les experts de <b>Smart Technologies</b> utilisent un modèle opérationnel bien défini basé sur la communication ouverte et la transparence afin de mener à bien des projets de migration.</span>
                <p class="mb-4 justify-content-center" style="line-height: 25px;">
                    <img src="img/migration_modal.jpg" alt="">
                </p>
            </div>
        </div>
    </div>
</div>

@endsection