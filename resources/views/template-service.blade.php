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
    <div class="hero bg-center bg-no-repeat bg-cover mb-brand-24" style="background-image: url('{{ $hero['background_image']['sizes']['large'] }}');"></div>
    <section>
        <div class="text-center mb-brand-40">
        <h1 class="font-averta mb-4">{{ $heading_images['heading'] }}</h1>
        <p class="ml-16 text-brand-display font-display leading-none text-brand-primary mb-0">{{ $heading_images['lead'] }}</p>
        </div>
    </section>
    <section>
        <div class="container mb-brand-40 relative">
            <div class="heading-images__service-square absolute left-0 bottom-brand-10 border-t-4 border-r-4 border-b-4 border-brand-primary z-10"></div>
            <div class="flex justify-center">
                <div class="flex-shrink-0">
                    <img src="{{ $heading_images['top_image']['sizes']['medium'] }}" alt="{{ $heading_images['top_image']['alt'] }}" class="heading-images__service-first border-16 border-white object-cover object-center relative z-30">
                    <img src="{{ $heading_images['bottom_image']['sizes']['medium'] }}" alt="{{ $heading_images['bottom_image']['alt'] }}" class="heading-images__service-second absolute left-0 bottom-0 z-20">
                </div>
                <div class="w-1/3 ml-20">
                    <h2 class="mt-brand-10 text-brand-h1 mb-brand-10 font-bold">{{ $heading_images['subheading'] }}</h2>
                    <div class="heading-images__service-text">
                        {!! $heading_images['text'] !!}
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ $heading_images['display_image']['url'] }}" alt="{{ $heading_images['display_image']['alt'] }}" class="h-brand-140 object-cover object-center mx-auto w-full px-brand-14 relative z-20 mb-brand-24">
    </section>
    <section class="container mb-brand-24">
        <div class="flex items-start justify-center">
            <div>
                <h2 class="text-brand-h1 mb-8 font-bold">{{ $list['heading'] }}</h2>
                @if ($list['items'])
                <ul class="list-disc ml-8 w-3/4">
                    @foreach ($list['items'] as $item)
                        <li class="mb-2 text-xl leading-relaxed"> <span class="text-2xl">{{ $item['item'] }} </span></li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="w-1/3 mt-10">
                <h3 class="text-brand-display font-display text-brand-primary">{{ $list['subheading'] }}</h3>
            </div>
        </div>
    </section>
    <section class="flex justify-end mb-brand-24">
        <div class="border-l-4 border-t-4 border-b-4 border-brand-primary w-11/12 float-right pb-brand-12">
            <h3 class="mt-5 bg-brand-secondary-75 py-2 pl-8 inline-block relative -left-brand-4 pr-brand-24 mb-brand-10 font-semibold">{{ $documents['heading'] }}</h3>
            <div class="flex">
                @foreach ($documents['lists'] as $list)
                    <ul class="list-disc ml-20">
                        @foreach ($list['items'] as $item)
                            <li class="text-xl leading-relaxed"><span class="text-2xl">{{ $item['item'] }}</span></li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </div>
    </section>
@endsection
