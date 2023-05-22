@extends('template')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Contact</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Contact</p>
                <h1 class="display-5 mb-4">Si vous avez des questions, s’il vous plaît contactez-nous</h1>
                <div class="row ">
                    <div class="col-lg-6 p-2">
                        <div class="border rounded p-1">
                            <h4><i class="fa fa-phone fa-3X"></i> &nbsp; Téléphone</h4>
                            <P>
                            <h5>(+225) 20 21 74 42 <br> (+225) 20 21 78 15</h5>
                            </P>
                        </div>
                    </div>
                    <div class="col-lg-6 p-2">
                        <div class="border rounded p-1">
                            <h4><i class="fa fa-envelope fa-3X"></i> &nbsp; Email</h4>
                            <P>
                            <h5>info@smartechnologies.com</h5>
                            </P>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                <div class="position-relative rounded overflow-hidden h-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.5999542813506!2d-4.021527985235123!3d5.3249231961372105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb985fb8bc1f%3A0xb8058c6bffe2f06d!2sImmeuble%20Le%20JECEDA%20PLATEAU!5e0!3m2!1sfr!2sci!4v1684730735706!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection