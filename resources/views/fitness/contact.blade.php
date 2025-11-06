@extends('fitness.layouts.app')

@section('title', 'Contact - Fitness Website')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a href="{{ route('fitness.index') }}">Home</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Contact Us</h4>
            <h1 class="display-4 text-white mb-4">Get In Touch</h1>
            <p class="text-white mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            </p>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="contact-form">
                    <h3 class="text-white mb-4">Send us a message</h3>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
