@if($page_builder)
    @foreach($page_builder as $block)
        @include('partials.page-builder.' . str_replace('_', '-', $block['acf_fc_layout']))
    @endforeach
@endif