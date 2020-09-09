
@php
  $header_logo = get_field('logo', 'options');
@endphp

<header class="bg-brand-primary w-full py-4 lg:py-8 sticky top-0 z-50">
  <div class="container">
    <div class="flex justify-between items-center flex-wrap">
      <a href="#" class="nav__button inline-block relative z-20">
        <span class="w-8 h-1 block bg-white"></span>
        <span class="w-8 h-1 block bg-white mt-1"></span>
        <span class="w-8 h-1 block bg-white mt-1"></span>
      </a>
      <div class="lg:flex-grow lg:text-center lg:relative lg:-left-brand-8">
        <a class="inline-block" href="{{ home_url('/') }}">
          <img data-src="{{ $header_logo['url'] }}" alt="{{ $header_logo['alt'] }}" class="w-24 lg:w-brand-48 lazy">
        </a>
      </div>
      <nav class="nav text-menu tracking-tight w-full flex-grow bottom-0 hidden">
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
  </div>
</header>
