@extends('layouts.website')

@section('content')



@include('partials.home.hero')
@include('partials.home.stats')
@include('partials.home.features')
@include('partials.pricing')
@include('partials.home.howitworks')

@include('partials.home.testimonials')

@include('partials.home.faq')
@include('partials.home.cta')




@endsection
