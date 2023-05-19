@extends('template')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="/">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contrat de support</li>
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
                <h1 class="display-5 mb-4">NOS CONTRATS DE SUPPORTS</h1>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <p>
                        Quel que soit leur taille, les entreprises ont recours à des infrastructures hébergeant leurs systèmes d’information en interne ou externe :
                    </p>
                    <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>Infrastructures serveurs </b> <br>
                    <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>Infrastructures réseau </b> <br>
                    <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>Infrastructures de sécurité </b> <br>
                    <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>Infrastructures de stockage </b> <br>
                    <hr class="bg-primary w-50" style="height: 5px;">
                    <p>
                        La forte croissance des infrastructures informatiques comme les Datacenters est due à la place prise par les systèmes d’information dans l’automatisation des processus métiers dans les entreprises.
                    </p>
                </div>
                <div class="col-lg-8">
                    <img class="img-fluid rounded" src="img/infrastructure.png">
                </div>
                <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4">
                        <div class="col-12 text-center">
                            <h4>Les entreprises doivent donc relever les défis suivants</h4>
                        </div>
                        <div class="col-lg-2 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-times text-white"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Maîtriser la complexité des technologies de l’exploitation</h6>
                                    </div>
                                    <div class="border-end d-none d-lg-block"></div>
                                </div>
                                <div class="border-bottom mt-4 d-block d-lg-none"></div>
                            </div>
                        </div>
                        <div class="col-lg-2 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-times text-white"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Maîtriser la gestion du cycle de vie des données</h6>
                                    </div>
                                    <div class="border-end d-none d-lg-block"></div>
                                </div>
                                <div class="border-bottom mt-4 d-block d-lg-none"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-times text-white"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Maintenir le niveau de sécurité et accroître la flexibilité des infrastructures et des applications</h6>
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
                                        <h6>contenir les dépenses énergétiques en tenant compte des aspects environnementaux et économiques.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            <div class="col-12 text-center">
                <h5 class="text-white">
                    Nous déployons des infrastructures (Serveurs, Réseau, Sécurité Internet Stockage,…) qui garantissent la disponibilité de votre système d’information et son accessibilité depuis l’extérieur de vos locaux, de manière totalement fiable et sécurisée.
                    <br>
                    Vous n’y trouverez que des avantages :
                </h5>
            </div>
            <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-users fa-3x text-white mb-3"></i><br>
                <span class="fs-5 h1 text-white">Pérennité de vos infrastructures</span>
                <hr class="bg-white w-25 mx-auto mb-0">

            </div>
            <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users fa-3x text-white mb-3"></i><br>
                <span class="fs-5 h1 text-white">Disponibilité de votre système d’information</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
            <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users fa-3x text-white mb-3"></i><br>
                <span class="fs-5 h1 text-white">Maîtrise des coûts d’investissements et d’exploitation</span>
                <hr class="bg-white w-25 mx-auto mb-0">
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


                    <i class="fa fa-check text-primary mb-3"></i><b> Support au quotidien de vos équipes</b><br>
                    <i class="fa fa-check text-primary mb-3"></i><b> Identification et analyse des besoins en adéquation avec votre business</b><br>
                    <i class="fa fa-check text-primary mb-3"></i><b> Déploiement des infrastructures en interne (Virtualisation ou Cloud Hybride) ou soit en mode hébergé</b><br>

                </p>
            </div>
            <div class="col-lg-6 wow fadeInUp text-center" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="img/work.png">
            </div>
        </div>
        <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4">
                <div class="col-12 text-center">
                    <h5>
                    Smart Technologies assure une Gouvernance Globale des Systèmes d’Information et propose par la mutualisation de ses ressources, compétences et infrastructures des solutions aux meilleurs coûts. Nos contrats d’assistance et de service comprennent un accompagnement permanent dans l’utilisation quotidienne et dans l’évolution fonctionnelle et légale de votre solution.
                    </h5>
                    <hr>
                </div>
                <div class="col-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-times text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h6>Supervision 24/7 des environnements techniques et applicatifs</h6>
                            </div>
                            <div class="border-end d-none d-lg-block"></div>
                        </div>
                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="col-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-times text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h6>Infogérance des réseaux et télécoms</h6>
                            </div>
                            <div class="border-end d-none d-lg-block"></div>
                        </div>
                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="col-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-times text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h6>Infogérance des infrastructures techniques</h6>
                            </div>
                            <div class="border-end d-none d-lg-block"></div>
                        </div>
                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="col-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-times text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h6>Infogérance des infrastructures applicatives</h6>
                            </div>
                            <div class="border-end d-none d-lg-block"></div>
                        </div>
                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="col-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-times text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h6>Infogérance des services de sécurité</h6>
                            </div>
                            <div class="border-end d-none d-lg-block"></div>
                        </div>
                        <div class="border-bottom mt-4 d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="col-lg-2 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h6>Support Utilisateurs & Desk management</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection