@extends('layouts.app')

@section('title', 'Home - Nicklaus Demo Project')

@section('content')
  @include('sections.hero')
  @include('sections.about')
  @include('sections.features')
  @include('sections.call')
  @include('sections.testimonial')
  @include('sections.counter')
  @include('sections.services')
  @include('sections.pricing')
  @include('sections.faq')
  @include('sections.calltwo')
  @include('sections.contact')
@endsection