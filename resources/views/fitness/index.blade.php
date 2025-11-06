@extends('fitness.layouts.app')

@section('title', 'Home - Fitness Website')

@section('content')
<!-- Carousel Start -->
<div class="header-carousel owl-carousel overflow-hidden bg-dark">
    <div class="header-carousel-item hero-section">
        <div class="hero-bg-half-1"></div>
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Wellcome to our fitness Center</h4>
                            <h1 class="display-1 text-white mb-4">The best gym center is now in your city</h1>
                            <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy... 
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                <a class="btn btn-dark py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> <span>Watch Video</span></a>
                                <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#"><span>Learn More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-carousel-item hero-section">
        <div class="hero-bg-half-2"></div>
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Wellcome to our fitness Center</h4>
                            <h1 class="display-2 text-white mb-4">Stay healthy by exercising at the best gym center</h1>
                            <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy... 
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                <a class="btn btn-dark py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> <span>Watch Video</span></a>
                                <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#"><span>Learn More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-fluid about pt-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-content h-100">
                    <h4 class="text-primary">About Fitness Center</h4>
                    <h1 class="display-4 text-white mb-4">We are the best at fulfilling your potential and achieving your goals.</h1>
                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In impedit accusantium autem quaerat natus nesciunt veritatis fugiat dolor eaque fuga.</p>
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-primary py-3 px-5"> <span>Make Appointment</span></a>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-shrink-0 ps-4">
                                <a href="#" class="btn btn-light btn-lg-square position-relative wow tada" data-wow-delay=".9s">
                                    <i class="fa fa-phone-alt fa-2x"></i>
                                    <div class="position-absolute" style="top: 5px; right: 5px;">
                                        <span><i class="fa fa-comment-dots text-dark"></i></span>
                                    </div>
                                </a>
                                <div class="d-flex flex-column ms-3">
                                    <span>Call to Our Experts</span>
                                    <a href="tel:+ 0123 456 7890"><span class="text-white">Free: + 0123 456 7890</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-img h-100">
                    <div class="about-img-inner d-flex h-100">
                        <img src="{{ asset('fitness/img/about-2.png') }}" class="img-fluid w-100" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Features Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"> Why choose us?</h4>
            <h1 class="display-4 mb-4">Out Our Highlights Below</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">  Our Blogs</h4>
            <h1 class="display-4 mb-4">Check out our latest stories</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection
