{{--
  Title: Hero
  Description: Hero Text
  Category: layout
  Icon: editor-alignleft
  Keywords: Hero Heroduction text
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: left right
  SupportsMode: false
  SupportsMultiple: true
--}}

<section class="Hero mb4 mb5-ns">
    <div class="mw8 center ph3 cf">
      <div class="fl w-100 w-70-ns">
        <div>
            {!! get_field('heading') !!}
        </div>
      </div>
    </div>
  </section>