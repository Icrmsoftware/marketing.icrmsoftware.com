@extends('layouts.website')

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
