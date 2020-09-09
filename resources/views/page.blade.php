@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container">
      <div class="mt-8 lg:mt-16">
        <div class="mb-4">
          @include('partials.page-header')
        </div>
        @include('partials.content-page')  @endwhile
      </div>
    </div>
@endsection
