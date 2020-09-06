@php
    $hero = get_field('hero');
    $heading_images = get_field('heading_images');
    $images_quote = get_field('images_quote');
@endphp

@extends('layouts.app')

@section('content')
    @if ($hero)
        <section style="background-image: url('{{ $hero['background_image']['sizes']['large'] }}');" class="bg-no-repeat bg-cover h-brand-160 flex flex-col justify-end">
            @if($hero['boxes'])
                <div class="boxes flex justify-center items-center mb-brand-20">
                    @foreach ($hero['boxes'] as $link)    
                        <a href="{{ $link['link']['url'] }}" target="{{ $link['link']['target'] }}" class="inline-block bg-brand-primary-90 text-white p-16 mx-brand-12">{{ $link['link']['title'] }}</a>
                    @endforeach
                </div>
            @endif
        </section>
    @endif
    @if ( $heading_images)
        <section class="heading-images container mt-16 text-left">
            <div class="flex flex-col items-center mb-brand-40">
                <div>
                    <h1 class="ml-8">{{ $heading_images['lead'] }}</h1>
                    <p class="ml-16 text-brand-display leading-none text-brand-navy">{{ $heading_images['heading'] }}</p>
                </div>
            </div>
            <div class="heading-images__box mb-16 text-right flex justify-end">
                <div class="w-brand-128 mr-3">
                    <h2 class="mb-10">{{ $heading_images['subheading'] }}</h2>
                    <div class="mr-brand-10">
                        {!! $heading_images['text'] !!}
                    </div>
                </div>
                <div class="overflow-hidden">
                    <img src="{{ $heading_images['top_image']['sizes']['medium'] }}" alt="{{ $heading_images['top_image']['alt'] }}" class="heading-images__first object-cover object-center relative z-10 -right-brand-24">
                    <img src="{{ $heading_images['bottom_image']['sizes']['medium'] }}" alt="{{ $heading_images['bottom_image']['alt'] }}" class="heading-images__second object-cover object-center border-16 border-white -top-brand-24 z-10 relative right-brand-5">
                </div>
            </div>
            <img src="{{ $heading_images['display_image']['url'] }}" alt="{{ $heading_images['display_image']['alt'] }}" class="h-brand-140 object-cover object-center mx-auto w-full px-brand-14 mb-16 relative z-20">
        </section>
    @endif
    @if ($images_quote)
        <section>
            <div>
                <img src="{{ $images_quote['top_image']['url'] }}" alt="{{ $images_quote['top_image']['alt'] }}" class="hidden">
                <div class="container">
                    <div class="w-3/4 mx-auto">
                        <h2 class="text-right text-brand-7xl leading-brand-tight text-brand-navy mb-brand-10">{{ $images_quote['heading'] }}</h2>
                        <div class="flex">
                            <div class="mr-brand-8">
                                <img src="{{ $images_quote['bottom_image']['url'] }}" alt="{{ $images_quote['bottom_image']['alt'] }}">
                                <div class="quote text-brand-h1 mt-brand-10 text-right leading-brand-tight">{!! $images_quote['quote'] !!}</div>
                            </div>
                            <div class="mt-8">
                                {!! $images_quote['text'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    {{-- @include('partials.page-header') --}}
    {{-- @include('partials.content-page') --}}
@endsection
