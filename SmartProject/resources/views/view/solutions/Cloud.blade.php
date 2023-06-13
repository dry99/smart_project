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
                <iframe width="510" height="287" src="https://www.youtube.com/embed/EewB21wL3nc" title="Présentation de Microsoft Office 365" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row">

                    <div class="col-12">
                        <h1 class="text-primary">Microsoft office 365</h1>
                        <hr class="text-primary w-50" style="height:10px;">
                    </div>
                    <div class="col-12">
                        <p class=" ">
                            <b>
                                Avec Microsoft Office 365, vous disposez de vos applications Word, Excel, PowerPoint, OneNote et Exchange (messagerie professionnelle) que vous soyez à votre bureau, chez vous ou en déplacement extérieur.
                            </b>
                        <p>
                            Vous accédez ainsi à vos logiciels du Pack Office et à votre messagerie depuis vos différents ordinateurs ainsi que vos tablettes et Smartphones via des applications mobiles.
                        </p>
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
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <!-- <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Testimonial</p> -->
            <h1 class="display-5 mb-5">Le tout en un !</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
            <div class="testimonial-item">
                <img class="rounded-circle mb-3" src="/img/partenaire/exchange.png" alt="">
                <h4>Microsoft Exchange</h4>
            </div>
            <div class="testimonial-item">
                <img class="rounded-circle mb-3" src="/img/partenaire/oneDrive.png" alt="">
                <h4>Microsoft OneDrive</h4>
            </div>
            <div class="testimonial-item">
                <img class="rounded-circle mb-3" src="/img/partenaire/skype.png" alt="">
                <h4>Skype entreprise</h4>
            </div>
            <div class="testimonial-item">
                <img class="rounded-circle mb-3" src="/img/partenaire/sharepoint.png" alt="">
                <h4>Sharepoint Online</h4>
            </div>
            <div class="testimonial-item">
                <img class="rounded-circle mb-3" src="/img/partenaire/office.jpg" alt="">
                <h4>Microsoft Office Pro</h4>
            </div>
            <div class="testimonial-item">
                <img class="rounded-circle mb-3" src="/img/partenaire/yammer.jpg" alt="">
                <h4>Microsoft Yammer</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Avantages</p>
                <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>Mise à jour automatique des dernières versions de Microsoft Office!</b> <br>
                <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>Découvrez les nouvelles fonctionnalités Office 2016 grâce à votre abonnement Office 365</b> <br>
                <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>Utilisez Office sur votre smartphone et votre tablette.</b> <br>
                <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>Chaque utilisateur peut installer Office sur 5 terminaux pour les offres intégrant Office : PC, Mac, iPad…</b> <br>
                <i class="fa fa-check text-primary mb-3"></i>&nbsp; <b>Enregistrez vos données dans le cloud afin de bénéficier d’une sauvegarde et d’un accès où que vous soyez.</b> <br>

            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Facts Start -->
<div class="container-fluid facts my-5 py-2">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <h1 class="text-white">Microsoft Azure</h1>
                <hr class="text-white bg-white" style="height:10px;">
                <p class="text-white">Microsoft Azure exécute toutes vos applications métier grâce à sa cohérence, sa mise à l’échelle globale et son intégration transparente à des environnements locaux. C’est la plateforme de cloud public où exécuter vos applications métier.</p>
                <p class="text-white">Azure est conçu sur les technologies que vous (et des millions d’autres utilisateurs) approuvez déjà : Windows Server, SQL Server, Active Directory, Hyper-V, etc. Cela veut dire que cet environnement est cohérent, simple et stable. Organisez vos machines virtuelles en local et dans le cloud selon les besoins de votre entreprise : aucune conversion n’est nécessaire. Protégez vos applications métier critiques avec des sauvegardes de cloud gérées et le service de récupération d’urgence intégré.</p>
            </div>

            <div class="col-lg-6">
                <iframe width="510" height="287" src="https://www.youtube.com/embed/372Ne6C_2qM" title="C&#39;est quoi Microsoft Azure - Tuto vidéo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row g-5 mt-2">
            <div class="col-lg-6 text-white">
                <i class="fa fa-check mb-3"></i>&nbsp; Bénéficiez de performances sans précédent <br>
                <i class="fa fa-check mb-3"></i>&nbsp; Gagnez en productivité <br>
                <i class="fa fa-check mb-3"></i>&nbsp; Utilisez une plateforme de service cloud ouverte et flexible <br>
                <i class="fa fa-check mb-3"></i>&nbsp; Développez votre environnement informatique existant <br>
            </div>

            <div class="col-lg-6 text-white">
                <i class="fa fa-check mb-3"></i>&nbsp; Évoluez en fonction de vos besoins, payez en fonction de votre utilisation <br>
                <i class="fa fa-check mb-3"></i>&nbsp; Protégez vos données <br>
                <i class="fa fa-check mb-3"></i>&nbsp; Exécutez vos applications n’importe où <br>
                <i class="fa fa-check mb-3"></i>&nbsp; Simplifiez les environnements complexes <br>
            </div>
        </div>
    </div>
</div>

<!-- About Start -->
<div class="container-fluid py-1">
    <div class="container">
        <div class="row g-4 mb-1">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-5 mb-4">MyBACKUP</h1>
                <span>
                    <b>MyBACKUP©, </b> est une solution de sauvegarde en ligne, divisée par besoins clients en 3 offres.
                </span>
                <p>
                    Les objectifs de la solution sont de garantir et protéger l’actif principal de son entreprise en télé-sauvegardant ses données informatiques, s’assurer d’une reprise d’activité immédiate, quelles que soient les circonstances et de bénéficier d’une solution sur mesure, adaptée spécifiquement à votre infrastructure.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="/img/backup.png" class="w-100" alt="" srcset="">
            </div>
        </div>
    </div>
</div>
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
                    <b>Solution de télé-sauvegarde pour postes fixes et serveurs Windows</b>
                    <p>Destinée aux artisans, professions libérales et de manière générale aux TPE désirant sauvegarder les données informatiques de leur entreprise.</p>
                </div>
                <h4>MyBACKUP© Serveur</h4>
            </div>
            <div class="testimonialAlt-item">
                <div class="testimonialAlt-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    <b>Solution de télé-sauvegarde pour serveurs et BDD en environnements hétérogènes</b>
                    <p>
                        Elle répond particulièrement aux besoins de sauvegarde des serveurs pour les
                        Organisations travaillant avec plusieurs systèmes d’exploitation ou exploitant des bases de données volumineuses
                        ou qui souhaitent protéger leurs applications critiques (ERP, CRM).
                    </p>
                </div>
                <h4>MyBACKUP© Entreprise</h4>
            </div>
            <div class="testimonialAlt-item">
                <div class="testimonialAlt-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    <b>Solution de télé-sauvegarde pour postes nomades</b>
                    <p>MyBACKUP© Utilisateur permet de sécuriser les données des postes nomades, occasionnellement connectés au réseau de l’entreprise.</p>
                </div>
                <h4>MyBACKUP© Utilisateur</h4>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection