@extends('template')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="">Solution</a></li>
                <li class="breadcrumb-item active" aria-current="page">Solution cloud</li>
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
                <iframe width="510" height="287" src="https://www.youtube.com/embed/e7xDtrtzh3I" title="Qu&#39;est-ce la virtualisation ?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row">

                    <div class="col-12">
                        <h1 class="text-primary">Virtulisation</h1>
                        <hr class="text-primary w-50" style="height:10px;">
                    </div>
                    <div class="col-12">

                        <p class=" ">
                            <b>
                                Virtualisez votre data center de façon fiable et sécurisée. Notre infrastructure de données agile offre une évolutivité inégalée, la continuité de l’activité et une gestion du stockage intelligent afin de répondre aux opportunités business.
                            </b>
                        </p>
                        <p>
                            Avec la virtualisation des serveurs Microsoft®, vous pouvez accroître considérablement l’efficacité de votre infrastructure informatique et transformer votre data center en un atout concurrentiel flexible et évolutif.
                            <b>Smart Technologies</b> à travers Microsoft Hyper-V vous permet de réduire les coûts de virtualisation en <b> convertissant en quelques minutes seulement des serveurs virtuels de toute taille en Hyper-V.</b> Vous pouvez réduire de 50 % l’utilisation du stockage pour votre environnement virtualisé.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Avantages</p>
                <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>Des services de fichiers simplifiés</b> <br>
                <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>une infrastructure de postes de travail virtuels</b> <br>
                <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>une sauvegarde en quelques minutes seulement</b> <br>
                <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>un stockage sans surcharge</b> <br>
                <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>le clonage des serveurs virtuels pour réduire les temps de provisionnement et libérer de l’espace de stockage.</b> <br>
            </div>
            <p>
                Profitez de la sauvegarde et de la restauration optimisée et automatisée ainsi que de la reprise après incident d’Hyper-V orchestrée par Azure avec la réplication SAN d’Azure Site Recovery.
            </p>
            <p>
                Valorisez notre solution intégrée fournie par Microsoft® Hyper-V™ et virtualisez leurs applications stratégiques, notamment : <br>
                <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>Microsoft Exchange</b> <br>
                <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>Microsoft SQL Server®</b> <br>
                <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>Microsoft SharePoint</b> <br>
                <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>Oracle® & SAP®</b> <br>
            </p>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Facts Start -->
<div class="container-fluid facts my-5 py-2">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="text-white">Réseaux & Sécurité</h1>
                <hr class="text-white bg-white" style="height:10px;">
                <p class="text-white">Dans le monde actuel, de plus en plus mobile, Les approches traditionnelles fondées sur un périmètre et les solutions fragmentaires ne permettent pas de répondre aux nouvelles attaques.</p>
                <p class="text-white">En donnant la priorité à la sécurisation de vos actifs d’entreprise clés, à savoir vos applications et vos données, vous pouvez simplifier et renforcer la sécurité sans compromettre la productivité.</p>

                <p class="text-white">Notre approche holistique de la sécurité des informations donne aux équipes informatiques un contrôle centralisé de la gestion, de l’accès et de l’hébergement des applications et données stratégiques de l’entreprise.</p>
                <p class="text-white">Nous vous offrons des fonctions de sécurité d’entreprise cruciale afin d’assurer une protection complète de vos données et applications :</p>
            </div>

            <div class="col-lg-6">
                <img src="img/securite.png" alt="" srcset="">
            </div>
            <div class="col-lg-12">
                <div class="row text-white">
                    <div class="col-lg-2"><i class="fa fa-check mb-3"></i>&nbsp; Identité et accès</div>
                    <div class="col-lg-2"><i class="fa fa-check mb-3"></i>&nbsp; Sécurité des réseaux</div>
                    <div class="col-lg-3"><i class="fa fa-check mb-3"></i>&nbsp; Sécurité des applications</div>
                    <div class="col-lg-2"><i class="fa fa-check mb-3"></i>&nbsp; Sécurité des données</div>
                    <div class="col-lg-2"><i class="fa fa-check mb-3"></i>&nbsp; Contrôle et réponse</div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<!-- About Start -->
<div class="container-fluid py-1">
    <div class="container">
        <div class="row g-4 mb-1">
            <div class="col-lg-6">
                <img src="img/save.png" class="w-100" alt="" srcset="">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-5 mb-4">Sauvegarde</h1>
                <span>
                    <b>La sauvegarde des données informatiques d’entreprise est une obligation légale. </b> Beaucoup ne pensent pas à sauvegarder leurs fichiers régulièrement ou ne le font pas correctement.
                </span>

                <p>
                Les sauvegardes sont souvent réalisées sur des supports physiques au sein des locaux (disque dur externe, serveur interne…) ce qui ne permet pas de faire face à la plupart des sinistres (pannes, virus, vol, incendies).
                </p>
            </div>
            
        </div>
    </div>
</div>

@endsection