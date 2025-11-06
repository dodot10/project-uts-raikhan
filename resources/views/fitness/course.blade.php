@extends('fitness.layouts.app')

@section('title', 'Courses - Fitness Website')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Our Courses</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a href="{{ route('fitness.index') }}">Home</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Courses</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Courses Start -->
<div class="container-fluid courses overflow-hidden py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"> Our Courses</h4>
            <h1 class="display-4 text-white mb-4">Check Our Highlights Below</h1>
            <p class="text-white mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
    </div>
</div>
<!-- Courses End -->
@endsection
