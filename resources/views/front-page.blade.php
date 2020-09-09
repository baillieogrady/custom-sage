@php
    $hero = get_field('hero');
    $heading_images = get_field('heading_images');
    $images_quote = get_field('images_quote');
@endphp

@extends('layouts.app')

@section('content')
    @if ($hero)
        <section style="background-image: url('{{ $hero['background_image']['sizes']['large'] }}');" class="pt-brand-20 lg:pt-0 bg-no-repeat bg-cover lg:h-brand-160 flex flex-col justify-end relative">
            @if($hero['boxes'])
                <div class="boxes flex lg:flex-no-wrap justify-center items-center mb-brand-20">
                    @foreach ($hero['boxes'] as $link)    
                        <a href="{{ $link['link']['url'] }}" target="{{ $link['link']['target'] }}" class="font-averta inline-block bg-brand-primary-90 text-white p-4 lg:p-16 mx-3 lg:mx-brand-12 relative text-sm lg:text-3xl leading-5">{{ $link['link']['title'] }}</a>
                    @endforeach
                </div>
            @endif
            <img data-src="@asset('images/arrows.svg')" alt="Arrow" class="absolute left-brand-1/2 bottom-brand-4 transform -translate-x-1/2 lazy">
        </section>
    @endif
    @if ( $heading_images)
        <section class="heading-images mb-12 lg:mb-0 px-0 mt-12 lg:mt-16 text-left overflow-hidden">
            <div class="flex flex-col items-center mb-12 lg:mb-brand-40">
                <div class="container lg:text-center">
                    <h1 class="lg:ml-8 font-averta mb-4">{{ $heading_images['lead'] }}</h1>
                    <p class="lg:ml-16 text-4xl lg:text-brand-display leading-none text-brand-primary font-display">{{ $heading_images['heading'] }}</p>
                </div>
            </div>
            <div class="container">
                <div class="heading-images__box mb-4 lg:mb-16 lg:text-right lg:flex justify-end flex-wrap lg:flex-no-wrap">
                    <div class="lg:w-brand-128 mr-3">
                        <h2 class="mb-4 lg:mb-12 font-bold">{{ $heading_images['subheading'] }}</h2>
                        <div class="lg:mr-brand-10">
                            {!! $heading_images['text'] !!}
                        </div>
                    </div>
                    <div class="overflow-hidden">
                        <img data-src="{{ $heading_images['top_image']['sizes']['medium'] }}" alt="{{ $heading_images['top_image']['alt'] }}" class="heading-images__home-first object-cover lazy object-center relative z-10 lg:-right-brand-24 mb-4 lg:mb-0">
                        <img data-src="{{ $heading_images['bottom_image']['sizes']['medium'] }}" alt="{{ $heading_images['bottom_image']['alt'] }}" class="heading-images__home-second object-cover object-center lg:border-16 lg:border-white lg:-top-brand-24 z-10 relative lg:right-brand-5 lazy">
                    </div>
                </div>
            </div>
            <div class="container">
                <img data-src="{{ $heading_images['display_image']['url'] }}" alt="{{ $heading_images['display_image']['alt'] }}" class="h-64 lg:h-brand-140 object-cover object-center mx-auto w-full relative z-20 lazy">
            </div>
        </section>
    @endif
    @if ($images_quote)
        <section class="overflow-hidden mb-12 lg:my-brand-40">
            <div class="container relative">
                <div class="heading-images__home-square absolute -left-brand-2 top-brand-40 border-r-4 border-b-4 border-brand-primary hidden lg:block"></div>
                {{-- <img src="{{ $images_quote['top_image']['url'] }}" alt="{{ $images_quote['top_image']['alt'] }}" class="heading-images__home-fourth lg:border-16 border-white absolute top-0 left-0 z-0 transform -translate-x-36"> --}}
                <h2 class="lg:text-right text-4xl lg:text-brand-display leading-brand-tight text-brand-primary  mb-4 lg:mb-brand-10 font-display mr-brand-24">{{ $images_quote['heading'] }}</h2>
                <div class="lg:flex justify-center lg:ml-brand-28">
                    <div class="mr-brand-8 heading-images__figure">
                        <img data-src="{{ $images_quote['bottom_image']['url'] }}" alt="{{ $images_quote['bottom_image']['alt'] }}" class="heading-images__home-third lg:ml-auto lazy">
                        <div class="lazy quote text-2xl lg:text-brand-h1 mt-8 lg:mt-brand-10 lg:text-right leading-brand-tight font-bold">{!! $images_quote['quote'] !!}</div>
                    </div>
                    <div class="mt-8 heading-images__text">
                        {!! $images_quote['text'] !!}
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
