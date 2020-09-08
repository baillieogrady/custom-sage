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
    <div class="hero bg-center bg-no-repeat bg-cover mb-brand-24" style="background-image: url('{{ $hero['background_image']['sizes']['large'] }}');"></div>
    <section>
        <div class="text-center mb-brand-40">
        <h1 class="font-averta mb-4">{{ $headings['heading'] }}</h1>
        <p class="ml-16 text-brand-display leading-none text-brand-primary font-display">{{ $headings['lead'] }}</p>
        </div>
    </section>
    <section class="references-template relative">
        @foreach ($dominos['items'] as $item)
            <div class="flex justify-center items-center mb-brand-14">
                <div class="flex-shrink-0 relative z-10 {{ $loop->last ? "order-1" : "" }}">
                    <img src="{{ $item['image']['sizes']['domino'] }}" alt="{{ $item['image']['alt'] }}" class="border-12 border-white references-template__image">
                    <div class="bg-brand-grey w-11/12 mx-auto p-5 flex {{ $loop->first ? "justify-end pr-0" : "justify-start pl-0" }}">
                        <p class="bg-brand-secondary-75 relative text-center text-xl py-3 mb-0 w-4/5 font-semibold {{ $loop->first ? "-right-brand-3" : "-left-brand-3" }}">{{ $item['name'] }}</p>
                    </div>
                </div>
                <div class="text-brand-h1 references-template__quote font-bold {{ $loop->first ? "ml-20" : "mr-brand-14 text-right" }} leading-brand-tight">
                    {!! $item['quote'] !!}
                </div>
            </div>
            @endforeach
        <h2 class="text-center text-brand-6xl text-brand-primary py-brand-10 mb-brand-14 font-display">
            {!! $dominos['heading'] !!}
        </h2>
    </section>
    <section class="references-template--alt relative">
        @foreach ($dominos_alt['items'] as $item)
            <div class="flex justify-center items-center mb-brand-14">
                <div class="flex-shrink-0 relative z-10 {{ $loop->last ? "order-1" : "" }}">
                    <img src="{{ $item['image']['sizes']['domino'] }}" alt="{{ $item['image']['alt'] }}" class="border-12 border-white references-template__image">
                    <div class="bg-brand-grey w-11/12 mx-auto p-5 flex {{ $loop->first ? "justify-end pr-0" : "justify-start pl-0" }}">
                        <p class="bg-brand-secondary-75 relative text-center text-xl py-3 mb-0 w-4/5 font-semibold {{ $loop->first ? "-right-brand-3" : "-left-brand-3" }}">{{ $item['name'] }}</p>
                    </div>
                </div>
                <div class="text-brand-h1 font-bold references-template__quote {{ $loop->first ? "ml-8" : "mr-20 text-right" }} leading-brand-tight">
                    {!! $item['quote'] !!}
                </div>
            </div>
            @endforeach
        <h2 class="references-template__heading text-center text-brand-6xl text-brand-primary py-brand-10 font-display mb-brand-14">
            {!! $dominos_alt['heading'] !!}
        </h2>
    </section>
  
@endsection
