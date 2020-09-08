<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class('font-body') @endphp>
    <div class="flex flex-col min-h-screen" role="document">
      @php do_action('get_header') @endphp
      @include('partials.header')
      <main class="flex flex-col flex-grow">
        @yield('content')
      </main>
      {{-- @if (App\display_sidebar())
        <aside class="sidebar">
          @include('partials.sidebar')
        </aside>
      @endif --}}
      @php do_action('get_footer') @endphp
      @include('partials.footer')
      @php wp_footer() @endphp
    </div>
  </body>
</html>
