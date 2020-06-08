
@php
  // $header_logo = get_field('header_logo', 'options');
@endphp

<header class="border-b-8 border-brand-primary shadow-3xl">
    <div class="container flex flex-wrap justify-between items-center py-3 lg:py-0">
      <a class="inline-block" href="{{ home_url('/') }}">
        {{-- <img class="w-16 lg:w-30 lazy" data-src={{ $header_logo['url'] }} alt={{ $header_logo['alt'] }}> --}}
      </a>
       <div class="block lg:hidden">
        <button class="nav__button flex items-center border rounded text-brand-primary border-transparent outline-none">
          <svg class="fill-current h-5 w-5 outline-none" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
      </div>
      <nav class="nav text-menu tracking-tight mt-8 lg:mt-0">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => '',
            'container'  => false
          ]) 
        !!}
        @endif
      </nav>
    </div>
</header>
