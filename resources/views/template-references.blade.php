{{--
  Template Name: References
--}}

@php
    $hero = get_field('hero');
    $headings = get_field('headings');
    $dominos = get_field('dominos');
    $dominos_alt = get_field('dominos_alt');
@endphp

@extends('layouts.app')

@section('content')
    <div class="hero bg-center bg-no-repeat bg-cover mb-12 lg:mb-brand-24" style="background-image: url('{{ $hero['background_image']['sizes']['large'] }}');"></div>
    <section>
        <div class="container">
            <div class="lg:text-center mb-12 lg:mb-brand-40">
                <h1 class="font-averta mb-4">{{ $headings['heading'] }}</h1>
                <p class="lg:ml-16 text-4xl lg:text-brand-display leading-none text-brand-primary font-display">{{ $headings['lead'] }}</p>
            </div>
        </div>
    </section>
    <section class="references-template relative container">
        @foreach ($dominos['items'] as $item)
            <div class="lg:flex justify-center items-center mb-12 lg:mb-brand-14">
                <div class="flex-shrink-0 relative z-10 {{ $loop->last ? "order-1" : "" }}">
                    <img data-src="{{ $item['image']['sizes']['domino'] }}" alt="{{ $item['image']['alt'] }}" class="lg:border-12 border-white object-cover object-center references-template__image w-full lg:w-auto lazy">
                    <div class="bg-brand-grey lg:w-11/12 mx-auto p-5 flex mb-4 lg:mb-0 {{ $loop->first ? "lg:justify-end lg:pr-0" : "justify-start lg:pl-0" }}">
                        <p class="bg-brand-secondary-75 relative text-center text-xl py-3 mb-0 w-full lg:w-4/5 font-semibold {{ $loop->first ? "lg:-right-brand-3" : "lg:-left-brand-3" }}">{{ $item['name'] }}</p>
                    </div>
                </div>
                <div class="text-2xl lg:text-brand-h1 references-template__quote font-bold {{ $loop->first ? "lg:ml-20" : "lg:mr-brand-14 lg:text-right" }} leading-brand-tight">
                    {!! $item['quote'] !!}
                </div>
            </div>
            @endforeach
        <h2 class="lg:text-center text-4xl lg:text-brand-6xl text-brand-primary py-brand-10 mb-12 lg:mb-brand-14 font-display">
            {!! $dominos['heading'] !!}
        </h2>
    </section>
    <section class="references-template--alt relative container">
        @foreach ($dominos_alt['items'] as $item)
            <div class="lg:flex justify-center items-center mb-12 lg:mb-brand-14">
                <div class="flex-shrink-0 relative z-10 {{ $loop->last ? "order-1" : "" }}">
                    <img data-src="{{ $item['image']['sizes']['domino'] }}" alt="{{ $item['image']['alt'] }}" class="lg:border-12 border-white references-template__image object-cover object-center lazy">
                    <div class="bg-brand-grey lg:w-11/12 mx-auto p-5 flex mb-4 lg:mb-0 {{ $loop->first ? "lg:justify-end lg:pr-0" : "justify-start lg:pl-0" }}">
                        <p class="bg-brand-secondary-75 relative text-center text-xl py-3 mb-0 w-full lg:w-4/5 font-semibold {{ $loop->first ? "lg:-right-brand-3" : "lg:-left-brand-3" }}">{{ $item['name'] }}</p>
                    </div>
                </div>
                <div class="text-2xl lg:text-brand-h1 references-template__quote font-bold {{ $loop->first ? "lg:ml-20" : "lg:mr-brand-14 lg:text-right" }} leading-brand-tight">
                    {!! $item['quote'] !!}
                </div>
            </div>
            @endforeach
        <h2 class="lg:text-center text-4xl lg:text-brand-6xl text-brand-primary py-brand-10 mb-12 lg:mb-brand-14 font-display">
            {!! $dominos_alt['heading'] !!}
        </h2>
    </section>
  
@endsection
