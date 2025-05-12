@extends('layouts.app')
@section('content')
    @include('includes.nav')
    <!-- Hero Section with Mission -->
   @include('includes.mission')

     <!-- Services Section -->
   @include('includes.services')

    <!-- Values Section -->

<!-- Vision Section -->
@include("includes.vision")

<!-- Footer -->
@include('includes.footer')

@endsection
    