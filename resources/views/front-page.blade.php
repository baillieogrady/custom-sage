@php
    $hero = get_field('hero');
    $heading_images = get_field('heading_images');
    $images_quote = get_field('images_quote');
@endphp

@extends('layouts.app')

@section('content')
    @if ($hero)
        <section style="background-image: url('{{ $hero['background_image']['sizes']['large'] }}');" class="bg-no-repeat bg-cover h-brand-160 flex flex-col justify-end relative">
            @if($hero['boxes'])
                <div class="boxes flex justify-center items-center mb-brand-20">
                    @foreach ($hero['boxes'] as $link)    
                        <a href="{{ $link['link']['url'] }}" target="{{ $link['link']['target'] }}" class="font-averta inline-block bg-brand-primary-90 text-white p-16 mx-brand-12">{{ $link['link']['title'] }}</a>
                    @endforeach
                </div>
            @endif
            <img src="@asset('images/arrows.svg')" alt="Arrow" class="absolute left-brand-1/2 bottom-brand-4 transform -translate-x-1/2">
        </section>
    @endif
    @if ( $heading_images)
        <section class="heading-images container px-0 mt-16 text-left overflow-hidden">
            <div class="flex flex-col items-center mb-brand-40">
                <div>
                    <h1 class="ml-8 font-averta mb-4">{{ $heading_images['lead'] }}</h1>
                    <p class="ml-16 text-brand-display leading-none text-brand-primary font-display">{{ $heading_images['heading'] }}</p>
                </div>
            </div>
            <div class="heading-images__box mb-16 text-right flex justify-end">
                <div class="w-brand-128 mr-3">
                    <h2 class="mb-10 font-bold">{{ $heading_images['subheading'] }}</h2>
                    <div class="mr-brand-10">
                        {!! $heading_images['text'] !!}
                    </div>
                </div>
                <div class="overflow-hidden">
                    <img src="{{ $heading_images['top_image']['sizes']['medium'] }}" alt="{{ $heading_images['top_image']['alt'] }}" class="heading-images__home-first object-cover object-center relative z-10 -right-brand-24">
                    <img src="{{ $heading_images['bottom_image']['sizes']['medium'] }}" alt="{{ $heading_images['bottom_image']['alt'] }}" class="heading-images__home-second object-cover object-center border-16 border-white -top-brand-24 z-10 relative right-brand-5">
                </div>
            </div>
            <img src="{{ $heading_images['display_image']['url'] }}" alt="{{ $heading_images['display_image']['alt'] }}" class="h-brand-140 object-cover object-center mx-auto w-full px-brand-14 relative z-20">
        </section>
    @endif
    @if ($images_quote)
        <section class="overflow-hidden my-brand-40">
            <div class="container relative">
                <div class="heading-images__home-square absolute -left-brand-2 top-brand-40 border-r-4 border-b-4 border-brand-primary"></div>
                <img src="{{ $images_quote['top_image']['url'] }}" alt="{{ $images_quote['top_image']['alt'] }}" class="heading-images__home-fourth border-16 border-white absolute top-0 left-0 z-0 transform -translate-x-36">
                <h2 class="text-right text-brand-7xl leading-brand-tight text-brand-primary mb-brand-10 font-display mr-brand-24">{{ $images_quote['heading'] }}</h2>
                <div class="flex justify-center ml-brand-28">
                    <div class="mr-brand-8 heading-images__figure">
                        <img src="{{ $images_quote['bottom_image']['url'] }}" alt="{{ $images_quote['bottom_image']['alt'] }}" class="heading-images__home-third ml-auto">
                        <div class="quote text-brand-h1 mt-brand-10 text-right leading-brand-tight font-bold">{!! $images_quote['quote'] !!}</div>
                    </div>
                    <div class="mt-8 heading-images__text">
                        {!! $images_quote['text'] !!}
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
