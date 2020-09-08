{{--
  Template Name: Company
--}}

@php
  $hero = get_field('hero');
  $heading_images = get_field('heading_images');
  $manager = get_field('manager');
  $text = get_field('text');
@endphp

@extends('layouts.app')

@section('content')
  <div class="hero bg-center bg-no-repeat bg-cover mb-brand-24" style="background-image: url('{{ $hero['background_image']['sizes']['large'] }}');"></div>
  <section>
    <div class="text-center mb-brand-40">
      <h1 class="font-averta">{{ $heading_images['heading'] }}</h1>
      <p class="ml-16 text-brand-display leading-none text-brand-navy font-display">{{ $heading_images['lead'] }}</p>
    </div>
    <div class="container relative mb-brand-40">
      <img src="{{ $heading_images['top_image']['sizes']['medium'] }}" alt="{{ $heading_images['top_image']['alt'] }}" class="heading-images__company-second absolute left-0 top-0 object-cover object-center z-10">
      <div class="heading-images__company-square absolute border-r-4 border-b-4 border-t-4 border-brand-primary"></div>
      <div class="flex justify-center">
        <img src="{{ $heading_images['bottom_image']['sizes']['medium'] }}" alt="{{ $heading_images['bottom_image']['alt'] }}" class="heading-images__company-first border-16 border-white mt-20 relative z-10 object-cover object-center">
        <div>
          <h2 class="mb-8 leading-none font-bold">{{ $heading_images['subheading'] }}</h2>
          <div class="ml-brand-14 heading-images__company-box">
            {!! $heading_images['text'] !!}
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="manager container mb-brand">
    <h2 class="text-center text-brand-display leading-relaxed text-brand-navy font-display mr-brand-40">{{ $manager['heading'] }}</h2>
    <div class="flex items-center justify-end">
      <div>
        <div class="manager__info bg-brand-secondary-75 py-6 px-8 mr-10 mb-8">{!! $manager['info'] !!}</div>
        <img src="{{ $manager['property_image']['url'] }}" alt="{{ $manager['property_image']['alt'] }}" style="width: 302px;" class="ml-auto mr-20">
      </div>
      <div class="relative">
        <img src="{{ $manager['image']['url'] }}" alt="{{ $manager['image']['alt'] }}" class="object-cover object-center w-brand-76 h-brand-96 relative z-10 mr-brand-24">
        <div class="heading-images__company-square-2 absolute -right-brand-12 border-b-4 border-t-4 border-l-4 border-brand-primary z-0 -bottom-brand-4"></div>
      </div>
    </div>
  </section>
  <section class="mb-brand-40">
    <div class="container">
      <div class="w-2/3 mx-auto">
        <h3 class="mb-4 text-4xl font-bold">{{ $text['heading'] }}</h3>
        <div class="ml-5">
          {!! $text['text'] !!}
        </div>
      </div>
    </div>
  </section>
@endsection
