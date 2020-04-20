@extends('layouts.master')

@section('content')
    @include('components.pageheader')
    @include('partials.services')
    @include('partials.feature')
    @include('partials.articles-cards')
    @include('components.newsletter')
    @include('partials.contact')
    @include('components.footer')
@endsection