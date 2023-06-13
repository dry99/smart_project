@extends('template')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Smart Technologies</li>
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
                <img class="img-fluid rounded" src="/img/svg.png">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-5 mb-4">Qui sommes-nous ?</h1>
                <p class="mb-4 justify-content-center" style="line-height: 25px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Smart Technologies</b> est une société Microsoft Gold Partner et une référence reconnue dans les domaines des TIC.
                    Implantée <b>en Côte d’Ivoire, en Guinée Conakry, au Libéria, au Sénégal, au congo et à Madagascar</b>. <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nous sommes un fournisseur complet de solutions d’affaires Microsoft, offrant des services de bout en bout
                    pour tous vos besoins logiciels. Nous fournissons une gamme de solutions Microsoft Dynamics ERP, CRM et Business Intelligence.

                    Avec plus de <b>15 années d’expérience</b> dans l’implémentation des systèmes d’information et des logiciels de gestion de la ligne des produits MBS Microsoft Dynamics ERP,


                </p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- testimonialAlt Start -->
<div class="container-xxl testimonialAlt py-5">
    <div class="container">
        <!-- <div class="text-center mx-auto wow fadeInUp" style="max-width: 600px;">
                        <h1 class="display-5 mb-5">What Our Clients Say!</h1>
                    </div> -->
        <div class="owl-carousel  testimonialAlt-carousel wow fadeInUp">

            <div class="testimonialAlt-item">
                <div class="testimonialAlt-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    L’amélioration de la productivité de nos clients Entreprise par le déploiement des solutions
                    fiables, performantes et ce, avec un rapport Qualité/Prix défiant toute concurrence.
                </div>
                <h4>Notre mission</h4>
            </div>
            <div class="testimonialAlt-item">
                <div class="testimonialAlt-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Aller au-delà des attentes de nos Clients, acteurs majeurs de l’industrie et des services
                    en leur fournissant des services de qualité, conformes aux standards internationaux.
                </div>
                <h4>Notre vision</h4>
            </div>
            <div class="testimonialAlt-item">
                <div class="testimonialAlt-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    L’Ecoute du client, la Simplicité, le Respect des engagements, la Performance, un fort collectif, 
                    la satisfaction du client, un accompagnement personnalisé.
                </div>
                <h4>Nos valeurs</h4>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


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
<!-- 
                Smart Technologies est une société Microsoft Gold Partner implantée en Côte d’Ivoire.
                        Nous sommes un fournisseur complet de solutions d’affaires Microsoft, offrant des services de bout en bout 
                        pour tous vos besoins logiciels. Nous fournissons une gamme de solutions Microsoft Dynamics ERP, CRM et Business Intelligence.

                        Avec plus de 15 années d’expérience dans l’implémentation des systèmes d’information et des logiciels de gestion,
                        Smart Technologies est une référence reconnue dans les domaines des TIC et a toujours fourni des prestations de services dans les différents 
                        pays de l’Afrique de l’Ouest et dispose des agences en Guinée Conakry, au Libéria, au Sénégal, au congo et particulièrement à Madagascar pour 
                        accompagner un client majeur.
                        
                        Partenaire Microsoft, pionnier en Afrique de l’Ouest francophone de la ligne des produits MBS Microsoft Dynamics ERP, Smart 
                        Technologies a toujours suivi le même engagement : proposer une offre globale de Nous devons notre pleine croissance à notre 
                        expertise et surtout à notre forte capacité d’adaptation et d’innovation.
                         
             -->




<!-- About Start -->
<div class="container-fluid py-1">
    <div class="container">
        <div class="row g-4 align-items-end mb-4">
            <div class="col-12 text-center">
                <h1 class="display-5"></h1>
            </div>
            
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-5 mb-4">Rejoignez-nous pour créer une force puissante pour le changement</h1>
                <p class="mb-4 justify-content-center" style="line-height: 25px;">
                    Que vous ayez besoin d’un partenaire pour la mise en œuvre, la mise à niveau, la migration ou 
                    que vous ayez simplement besoin d’un support continu, <b>Smart Technologies</b> vous fournit des solutions et 
                    des services personnalisés pour répondre à tous les besoins de votre entreprise. Avec une équipe très 
                    diversifiée et des experts chevronnés, nous sommes capables de gérer tout type d’exigences de projet.
                </p>
            </div>
            <div class="col-lg-5 wow fadeInUp text-center" data-wow-delay="0.1s">
                <img class="img-fluid rounded w-75" src="/img/smart_site.png">
            </div>
        </div>
    </div>
</div>

@endsection