@extends('layouts.website')

@section('seo')
    @include('partials.seo')
@endsection

@section('content')

@include('partials.manufacturing.hero')

@include('partials.manufacturing.features')
@include('partials.manufacturing.stats')

@include('partials.pricing')
@include('partials.manufacturing.testimonials')



@include('partials.manufacturing.howitworks')



@include('partials.manufacturing.faq')
@livewire('cta')

@livewire('getstarted')



@endsection
