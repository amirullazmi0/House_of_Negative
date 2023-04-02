@extends('user.template')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero-talent" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col">
                    <!-- <h1 class="fw-bold text-center" style="font-size: 100px;">WELCOME</h1><br> -->
                    <h2 class="fw-bold text-center" style="font-size: 50px;">NEGATIVE TALENTS</h2>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<section style="background-color: black;">
    <div class="container">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search Talent" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-dark" type="button" id="button-addon2">Search</button>
        </div>
        <div class="card border border-danger" style="background-color: black;  ">
            <div class="card-body">
                <section id="portfolio" class="portfolio">
                    <div class="container">
                        <div class="row  portfolio-container" data-aos="fade-up" data-aos-delay="150">
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <a href="">
                                    <img src="/img/hon-bg.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="portfolio-info">
                                    <h4 class="fw-bold">Nama Talent</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <a href="">
                                    <img src="/img/talent/twophi.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="portfolio-info">
                                    <h4 class="fw-bold text-center">Nama Talent</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <a href="">
                                    <img src="/img/talent/barasuara.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="portfolio-info">
                                    <h4 class="fw-bold text-center">Nama Talent</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <a href="">
                                    <img src="/img/talent/pn.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="portfolio-info">
                                    <h4 class="fw-bold text-center">Nama Talent</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <a href="">
                                    <img src="/img/talent/takeit.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="portfolio-info">
                                    <h4 class="fw-bold text-center">Nama Talent</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <a href="">
                                    <img src="/img/talent/gerilya.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="portfolio-info">
                                    <h4 class="fw-bold text-center">Nama Talent</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <a href="">
                                    <div class="text-center">
                                        <img class="" src="/img/talent/24karat.jpg" class="img-fluid" alt="">
                                    </div>
                                </a>
                                <div class="portfolio-info">
                                    <h4 class="fw-bold text-center">Nama Talent</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <a href="">
                                    <img src="/img/talent/pantak.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="portfolio-info">
                                    <h4 class="fw-bold text-center">Nama Talent</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- End Portfolio Section -->
            </div>
        </div>
    </div>
</section>

@endsection