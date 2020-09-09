@php
  $text = get_field('text', 'options');
  $footer_logo = get_field('footer_logo', 'options');
  $images = get_field('images', 'options');
  $facebook = get_field('facebook', 'options');
  $instagram = get_field('instagram', 'options');
@endphp

<footer class="footer bg-brand-primary pb-brand-8 lg:pb-0 pt-brand-8 text-white text-xs">
  <div class="container">
    <div class="flex flex-wrap lg:flex-no-wrap justify-between">
      <div>
        <a href="tel:012661267" class="mb-6 inline-block relative lg:-left-brand-4">
          <img data-src="@asset('images/24.svg')" alt="24" class="lazy" />
        </a>
        <div>
          {!! $text !!}
        </div>
      </div>
      <div class="mt-12 lg:mt-0">
        <img data-src="{{ $footer_logo['url'] }}" alt="{{ $footer_logo['alt'] }}" class="h-8 footer__logo lazy">
        <div class="footer__images flex flex-wrap lg:flex-no-wrap justify-between w-full mt-12 lg:mt-16">
          <img data-src="@asset('images/ovi.svg')" alt="Ovi" class="lazy">
          <img data-src="@asset('images/rics.png')" alt="Rics" class="mt-8 mb-12 lazy lg:mt-0 lg:mb-0">
        </div>
      </div>
      <div class="mt-5 lg:mt-0">
        <ul class="list-none flex lg:justify-end mb-2">
          <li class="inline-block">
            <a href="{{ $facebook }}"><img data-src="@asset('images/fb.svg')" alt="Facebook" class="lazy"></a>
          </li>
          <li class="inline-block ml-1">
            <a href="{{ $instagram }}"><img data-src="@asset('images/insta.svg')" alt="Instagram" class="lazy"></a>
          </li>
        </ul>
        <nav class="lg:text-right mb-4">
          @if (has_nav_menu('secondary_navigation'))
            {!! wp_nav_menu([
              'theme_location' => 'secondary_navigation',
              'menu_class' => '',
              'container'  => false
            ]) 
          !!}
          @endif
        </nav>
        <p>&copy; Copyright</p>
      </div>
    </div>
  </div>
</footer>
