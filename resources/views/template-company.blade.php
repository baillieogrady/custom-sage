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
  <div class="hero bg-center bg-no-repeat bg-cover mb-12 lg:mb-brand-24" style="background-image: url('{{ $hero['background_image']['sizes']['large'] }}');"></div>
  <section>
    <div class="lg:text-center mb-12 lg:mb-brand-40 container">
      <h1 class="font-averta mb-4">{{ $heading_images['heading'] }}</h1>
      <p class="lg:ml-16 text-4xl lg:text-brand-display leading-none text-brand-primary font-display">{{ $heading_images['lead'] }}</p>
    </div>
    <div class="container relative mb-12 lg:mb-brand-40">
      <img src="{{ $heading_images['top_image']['sizes']['medium'] }}" alt="{{ $heading_images['top_image']['alt'] }}" class="heading-images__company-second lg:absolute left-0 top-0 object-cover object-center z-10 mb-12">
      <div class="heading-images__company-square lg:absolute border-r-4 border-b-4 border-t-4 border-brand-primary hidden lg:block"></div>
      <div class="flex flex-col lg:flex-row justify-center">
        <img src="{{ $heading_images['bottom_image']['sizes']['medium'] }}" alt="{{ $heading_images['bottom_image']['alt'] }}" class="heading-images__company-first lg:border-16 border-white mt-4 lg:mt-20 relative z-10 object-cover object-center order-1 lg:order-first">
        <div>
          <h2 class="mb-4 lg:mb-8 leading-none font-bold">{{ $heading_images['subheading'] }}</h2>
          <div class="lg:ml-brand-14 heading-images__company-box">
            {!! $heading_images['text'] !!}
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="manager container mb-brand mb-12 lg:mb-0">
    <h2 class="lg:text-center text-4xl lg:text-brand-display leading-relaxed text-brand-navy font-display mr-brand-40 mb-4">{{ $manager['heading'] }}</h2>
    <div class="flex flex-col lg:flex-row items-center justify-end">
      <div>
        <div class="manager__info bg-brand-secondary-75 py-6 px-8 mr-10 mb-8 w-full lg:w-auto">{!! $manager['info'] !!}</div>
        <img data-src="{{ $manager['property_image']['url'] }}" alt="{{ $manager['property_image']['alt'] }}" style="width: 302px;" class="ml-auto mr-20 lazy">
      </div>
      <div class="order-first lg:order-last relative">
        <img data-src="{{ $manager['image']['url'] }}" alt="{{ $manager['image']['alt'] }}" class="object-cover object-center w-full lg:w-brand-76 h-brand-96 relative z-10 mr-brand-24 mb-4 lg:mb-0 lazy">
        <div class="heading-images__company-square-2 absolute -right-brand-12 border-b-4 border-t-4 border-l-4 border-brand-primary z-0 -bottom-brand-4 hidden lg:block"></div>
      </div>
    </div>
  </section>
  <section class="mb-12 lg:mb-brand-40">
    <div class="container">
      <div class="lg:w-2/3 mx-auto">
        <h3 class="mb-4 text-2xl lg:text-4xl font-bold">{{ $text['heading'] }}</h3>
        <div class="lg:ml-5">
          {!! $text['text'] !!}
        </div>
      </div>
    </div>
  </section>
@endsection
