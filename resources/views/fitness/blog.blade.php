@extends('fitness.layouts.app')

@section('title', 'Blog - Fitness Website')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Our Blog</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a href="{{ route('fitness.index') }}">Home</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Blog</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

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
