@extends('layouts.app')
@section('content')
    <!-- Hero-->
    <section class="container-fluid my-5 pt-5 pb-lg-4 px-xxl-4">

    @include('components.hero')
    </section>
    <!-- Categories-->
    <section class="container py-5 pt-xxl-4 mt-md-2 mb-md-4">
        @include('components.categories')
    </section>

    @include('components.feauters')

    <!-- Where to stay-->
        @include('components.hall')

        <!-- Banner + Where to eat-->
    <div class="container mb-5 pb-lg-4">
        @include('components.florist')
    </div>
    <!-- singers -->
    @include('components.singer')
    <!-- Upcoming events-->
    <section class="container mb-5 pb-lg-3">
        @include('components.upcomingevent')
    </section>
    <!-- What’s new-->
    <section class="container mt-n3 mt-md-0 mb-5 pb-lg-4">
        @include('components.whatsnews')
    </section>

    <!-- Blog: Latest posts-->
    <section class="container my-5 py-lg-4">
        @include('components.bloglasted')
    </section>

    <!-- Mobile app CTA-->
    <section class="container">
        @include('components.cta')
    </section>
@endsection
