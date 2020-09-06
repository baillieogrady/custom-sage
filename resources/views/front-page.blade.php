@php
    $hero = get_field('hero');
    $heading_images = get_field('heading_images');
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
        <section class="container heading-images mt-16 text-left">
            <div class="flex flex-col items-center mb-brand-40">
                <div>
                    <h1 class="ml-8">{{ $heading_images['lead'] }}</h1>
                    <p class="ml-16 text-brand-display leading-relaxed text-brand-navy">{{ $heading_images['heading'] }}</p>
                </div>
            </div>
            <div class="heading-images__box mb-16 text-right flex justify-end ml-auto">
                <div class="w-brand-128">
                    <h2 class="mb-10">{{ $heading_images['subheading'] }}</h2>
                    <div class="mr-brand-10">
                        {!! $heading_images['text'] !!}
                    </div>
                </div>
                <div>
                    <img src="{{ $heading_images['top_image']['sizes']['medium'] }}" alt="{{ $heading_images['top_image']['alt'] }}" class="heading-images__first object-cover object-center relative z-10">
                    <img src="{{ $heading_images['bottom_image']['sizes']['medium'] }}" alt="{{ $heading_images['bottom_image']['alt'] }}" class="heading-images__second object-cover object-center border-16 border-white -top-brand-24 z-10">
                </div>
            </div>
            <img src="{{ $heading_images['display_image']['url'] }}" alt="{{ $heading_images['display_image']['alt'] }}" class="h-brand-140 object-cover object-center mx-auto w-full px-brand-14 mb-16">
        </section>
    @endif
    {{-- @include('partials.page-header') --}}
    {{-- @include('partials.content-page') --}}
@endsection
