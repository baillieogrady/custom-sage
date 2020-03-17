@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  {{-- <div id="posts"></div> --}}
{{--   
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile
  <img data-src="https://images.unsplash.com/photo-1576909855973-eb0bb6ab8986?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="" class="lozad">

  {!! get_the_posts_navigation() !!} --}}
@endsection
