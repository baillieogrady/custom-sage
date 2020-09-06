@php
  $text = get_field('text', 'options');
  $footer_logo = get_field('footer_logo', 'options');
  $images = get_field('images', 'options');
  $facebook = get_field('facebook', 'options');
  $instagram = get_field('instagram', 'options');
@endphp

<footer class="footer flex justify-between bg-brand-primary py-brand-8 px-brand-10 text-white text-xs">
  <div >
    <a href="tel:012661267" class="mb-6 inline-block relative -left-brand-4">
      <img data-src="@asset('images/24.svg')" alt="" class="lazy" />
    </a>
    <div>
      {!! $text !!}
    </div>
  </div>
  <div>
    <img src="{{ $footer_logo['url'] }}" alt="{{ $footer_logo['alt'] }}" class="h-8 footer__logo">
    <div class="footer__images flex justify-between w-full mt-20">
      <img src="@asset('images/ovi.svg')" alt="Ovi">
      <img src="@asset('images/rics.png')" alt="Rics">
    </div>
  </div>
  <div class="mt-5">
    <ul class="list-none flex justify-end mb-2">
      <li class="inline-block">
        <a href="{{ $facebook }}"><img src="@asset('images/fb.svg')" alt="Facebook"></a>
      </li>
      <li class="inline-block ml-1">
        <a href="{{ $instagram }}"><img src="@asset('images/insta.svg')" alt="Instagram"></a>
      </li>
    </ul>
    <nav class="text-right mb-4">
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
</footer>
