{{--
  Title: Hero
  Description: Hero
  Category: layout
  Icon:
  Keywords: Hero block
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

<section class="container">
<div style="background-image: url('{{ $image['url'] }}');" class="h-64 bg-cover bg-center flex justi">
    <p class="text-white">Hello</p>
  </div>
</section>