@extends('layouts.app')

@section('title', 'Product | Onlined')

@section('styles')
    <link rel="stylesheet" href="{{ asset('template/edison/css/courses.min.css') }}" />
@endsection

@section('hero')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-orange active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
@endsection

@section('content')
    <!-- Product Start -->
    <div class="container-xxl bg-light my-6 py-6 pt-0" style="margin: 12rem 0;">
        <div class="container">
            <div class="bg-orange text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 text-light mb-0">The Best Bakery In Your City</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <div class="d-inline-flex align-items-center text-start">
                            <i class="fa fa-phone-alt fa-4x flex-shrink-0"></i>
                            <div class="ms-4">
                                <p class="fs-5 fw-bold mb-0">Call Us</p>
                                <p class="fs-1 fw-bold mb-0">+012 345 6789</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-orange text-uppercase mb-2">// Bakery Products</p>
                <h1 class="display-6 mb-4">Explore The Categories Of Our Bakery Products</h1>
            </div>
            <div class="row g-4">
                @foreach ($products as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                            <div class="text-center p-4">
                                <div class="d-inline-block border border-orange rounded-pill px-3 mb-3">Rp {{ number_format($item->price) }}</div>
                                <h3 class="mb-3">{{ $item->name }}</h3>
                                <span>{{ $item->description }}</span>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="{{ asset('storage/'.$item->photo) }}" alt="">
                                {{-- <div class="product-overlay">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                            class="fa fa-eye text-orange"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Product End -->
@endsection

@section('js')
    <script src="{{ asset('template/edison/js/reviews.min.js') }}"></script>
    <script src="{{ asset('template/edison/js/courses.min.js') }}"></script>
@endsection
