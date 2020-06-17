{{--
  Title: Hero
  Description: hero block
  Category: banter
  Icon:
  Keywords: hero block
  Mode: edit
  Align: center
  PostTypes: page
  SupportsAlign: center
  SupportsMode: true
  SupportsMultiple: true
--}}

@php
    $image = get_field('image');
@endphp

<section>
  <div style="background-image: url('{{ $image['url'] }}');" class="h-64 bg-cover bg-center flex justify-center items-center">
    <h1 class="text-white text-6xl">
      Heading
    </h1>
  </div>
</section>