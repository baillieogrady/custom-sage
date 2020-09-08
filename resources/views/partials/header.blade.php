
@php
  $header_logo = get_field('logo', 'options');
@endphp

<header class="bg-brand-primary w-full relative py-brand-20">
  <div class="container">
    <div class="flex items-center">
      <a class="inline-block absolute top-brand-1/2 left-brand-1/2 transform -translate-x-1/2 -translate-y-1/2" href="{{ home_url('/') }}">
        <img src="{{ $header_logo['url'] }}" alt="{{ $header_logo['alt'] }}" class="w-48">
      </a>
      <a href="#" class="burger inline-block">
        <span class="w-8 h-1 block bg-white"></span>
        <span class="w-8 h-1 block bg-white mt-1"></span>
        <span class="w-8 h-1 block bg-white mt-1"></span>
      </a>
        {{-- <div class="block lg:hidden">
        <button class="nav__button flex items-center border rounded border-transparent outline-none">
          <svg class="fill-current h-5 w-5 outline-none" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
      </div> --}}
      {{-- <nav class="nav text-menu tracking-tight mt-8 lg:mt-0">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => '',
            'container'  => false
          ]) 
        !!}
        @endif
      </nav> --}}
    </div>
  </div>
</header>
