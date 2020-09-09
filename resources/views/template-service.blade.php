{{--
  Template Name: Service
--}}

@php
  $hero = get_field('hero');
  $heading_images = get_field('heading_images');
  $list = get_field('list');
  $documents = get_field('documents');
@endphp

@extends('layouts.app')

@section('content')
    <div class="hero bg-center bg-no-repeat bg-cover mb-12 lg:mb-brand-24" style="background-image: url('{{ $hero['background_image']['sizes']['large'] }}');"></div>
    <section class="lg:text-center lg:mb-brand-40 mb-12 container">
        <div class="lg:text-center ">
        <h1 class="font-averta mb-4">{{ $heading_images['heading'] }}</h1>
        <p class="lg:ml-16 text-4xl lg:text-brand-display leading-none text-brand-primary font-display">{{ $heading_images['lead'] }}</p>
        </div>
    </section>
    <section>
        <div class="container lg:mb-brand-40 relative">
            <div class="heading-images__service-square hidden lg:block absolute left-0 bottom-brand-10 border-t-4 border-r-4 border-b-4 border-brand-primary z-10"></div>
            <div class="flex flex-col lg:flex-row justify-center">
                <div class="flex-shrink-0">
                    <img data-src="{{ $heading_images['top_image']['sizes']['medium'] }}" alt="{{ $heading_images['top_image']['alt'] }}" class="lazy heading-images__service-first lg:border-16 border-white object-cover object-center relative z-30 mb-4">
                    <img data-src="{{ $heading_images['bottom_image']['sizes']['medium'] }}" alt="{{ $heading_images['bottom_image']['alt'] }}" class="lazy heading-images__service-second lg:absolute left-0 bottom-0 z-20 mb-4">
                </div>
                <div class="order-first lg:order-last lg:w-1/3 lg:ml-20">
                    <h2 class="lg:mt-brand-10 lg:text-brand-h1 mb-4 lg:mb-brand-10 font-bold">{{ $heading_images['subheading'] }}</h2>
                    <div class="heading-images__service-text mb-4">
                        {!! $heading_images['text'] !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <img data-src="{{ $heading_images['display_image']['url'] }}" alt="{{ $heading_images['display_image']['alt'] }}" class=" lg:h-brand-140 object-cover object-center mx-auto w-fullrelative z-20 mb-12 lg:mb-brand-24 lazy w-full">
        </div>
    </section>
    <section class="container mb-12 lg:mb-brand-24">
        <div class="lg:flex items-start justify-center">
            <div>
                <h2 class="text-2xl lg:text-brand-h1 mb-8 font-bold">{{ $list['heading'] }}</h2>
                @if ($list['items'])
                <ul class="list-disc ml-8 w-3/4">
                    @foreach ($list['items'] as $item)
                        <li class="mb-3 lg:text-xl leading-relaxed"> <span class="lg:text-2xl">{{ $item['item'] }} </span></li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="lg:w-1/3 mt-12 lg:mt-10">
                <h3 class="text-4xl lg:text-brand-display font-display text-brand-primary">{{ $list['subheading'] }}</h3>
            </div>
        </div>
    </section>
    <section class="flex justify-end mb-12 lg:mb-brand-24">
        <div class="border-l-4 border-t-4 border-b-4 border-brand-primary w-11/12 float-right pb-brand-12">
            <h3 class="mt-5 bg-brand-secondary-75 py-2 pl-8 inline-block relative -left-brand-4 pr-8 lg:pr-brand-24 mb-brand-10 font-semibold">{{ $documents['heading'] }}</h3>
            <div class="lg:flex">
                @foreach ($documents['lists'] as $list)
                    <ul class="list-disc ml-12 lg:ml-20">
                        @foreach ($list['items'] as $item)
                            <li class="mb-3 lg:text-xl leading-relaxed"><span class="lg:text-2xl">{{ $item['item'] }}</span></li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </div>
    </section>
@endsection
