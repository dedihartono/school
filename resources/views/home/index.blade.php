@extends('layouts.templates.mentor.app')

@section('title', 'School')

@section('sliders')
    @include('home.components.hero')
@endsection

@section('content')

    <!-- ======= About Section ======= -->
    @include('home.components.about')
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    @include('home.components.counts')
    <!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    @include('home.components.why-us')
    <!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    @include('home.components.features')
    <!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    @include('home.components.course')
    <!-- End Popular Courses Section -->

    <!-- ======= Teachers Section ======= -->
    @include('home.components.teachers')
    <!-- End Teachers Section -->

@endsection
