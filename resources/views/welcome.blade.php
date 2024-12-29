@extends('layouts.website')

@section('seo')
    @include('partials.seo')
@endsection

@section('content')

@include('partials.home.hero')

@include('partials.home.features')
@include('partials.home.stats')

@include('partials.pricing')
@include('partials.home.testimonials')



@include('partials.home.howitworks')



@include('partials.home.faq')
@livewire('cta')

@livewire('getstarted')



@endsection
