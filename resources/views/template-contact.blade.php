{{--
  Template Name: Contact
--}}

@php
  $hero = get_field('hero');
  $headings = get_field('headings');
  $form = get_field('form');
  $location = get_field('location');
@endphp

@extends('layouts.app')

@section('content')
    <div class="hero bg-center bg-no-repeat bg-cover mb-12 lg:mb-brand-24" style="background-image: url('{{ $hero['background_image']['sizes']['large'] }}');"></div>
    <section class="container">
        <div class="lg:text-center mb-brand-24">
            <h1 class="font-averta mb-4">{{ $headings['heading'] }}</h1>
            <p class="lg:ml-16 text-4xl lg:text-brand-display leading-none text-brand-primary font-display">{{ $headings['lead'] }}</p>
        </div>
    </section>
    {{-- <form action="#" class="border-r-4 border-b-4 border-t-4 border-brand-primary py-brand-24 px-16 w-brand-almost-full relative mb-brand-40">
      <div>
        <div class="flex justify-between -mx-8">
          <div class="px-8 mb-8 w-1/3">
            <label for="vorname" class="text-xl leading-loose block text-center mb-4 font-semibold">VORNAME*</label>
            <input type="text" id="vorname" name="vorname" class="border border-black w-full p-1 px-2 text-base">
          </div>
          <div class="px-8 mb-8 w-1/3">
            <label for="nachname" class="text-xl leading-loose block text-center mb-4 font-semibold">NACHNAME*</label>
            <input type="text" id="nachname" name="nachname" class="border border-black w-full p-1 px-2 text-base">
          </div>
          <div class="px-8 mb-8 w-1/3">
            <label for="email" class="text-xl leading-loose block text-center mb-4 font-semibold">E-MAIL*</label>
            <input type="text" id="email" name="email" class="border border-black w-full p-1 px-2 text-base">
          </div>
        </div>
        <div class="flex justify-between -mx-8">
          <div class="px-8 mb-8 w-1/3">
            <label for="telefonnummer" class="text-xl leading-loose block text-center mb-4 font-semibold">TELEFONNUMMER*</label>
            <input type="text" id="telefonnummer" name="telefonnummer" class="border border-black w-full p-1 px-2 text-base">
          </div>
          <div class="px-8 mb-8 w-1/3">
            <label for="kunde" class="text-xl leading-loose block text-center mb-4 font-semibold">KUNDE*</label>
            <select id="kunde" name="kunde" class="border border-black w-full text-base h-brand-8 px-2">
              <option value="Bitte auswahlen">Bitte auswahlen</option>
            </select>
          </div>
          <div class="px-8 mb-16 w-1/3">
            <label for="grund" class="text-xl leading-loose block text-center mb-4 font-semibold">GRUND*</label>
            <select id="grund" name="grund" class="border border-black w-full text-base h-brand-8 px-2">
              <option value="Bitte auswahlen">Bitte auswahlen</option>
            </select>
          </div>
        </div>
        <div class="flex justify-between -mx-8">
          <div class="px-8 w-1/3">
            <div class="mb-8">
              <label for="betreff" class="text-xl leading-loose block text-center mb-4 font-semibold">BETREFF*</label>
              <input type="text" id="betreff" name="betreff" class="border border-black w-full p-1 px-2 text-base">
            </div>
            <div>
              <label for="anhange" class="text-xl leading-loose block text-center mb-4 font-semibold">ANHÄNGE*</label>
              <select id="anhange" name="anhange" class="border border-black w-full text-base h-brand-8 px-2">
                <option value="Datei auswählen">Datei auswählen</option>
              </select>
              <p class="mt-20 text-base">* Pflichtfeld</p>
            </div>
          </div>
          <div class="px-8 w-2/3">
            <label for="nachricht" class="text-xl leading-loose block mb-4 font-semibold">NACHRICHT*</label>
            <textarea name="nachricht" id="nachricht" cols="30" rows="10" class="border border-brand-primary w-full text-base p-2" style="height: 264px;"></textarea>
          </div>
        </div>
        <input type="submit" value="ABSCHICKEN" class="absolute bg-brand-primary text-white left-brand-1/2 bottom-0 transform -translate-x-1/2 translate-y-1/2 py-2 px-5 cursor-pointer">
      </div>
    </form> --}}
    <div class="container mb-12 lg:mb-brand-40">
      {!! $form['shortcode'] !!}
    </div>
    <section class="contact mb-12 lg:mb-brand-40">
      <div class="container">
        <div class="lg:w-10/12 mx-auto">
          @foreach ($location['items'] as $item)
            <div class="lg:flex -mx-5 mb-10 text-xl">
              <div class="px-5 pb-5 lg:pb-0 lg:w-1/2">
                <div class="bg-brand-grey">
                  <p class="bg-brand-secondary-75 text-center inline-block px-brand-12 mt-6 relative -left-brand-3 mb-0 py-1 font-semibold">{{ $item['heading'] }}</p>
                  <div class="p-8">
                    <p class="font-bold mb-6">{{ $item['subheading'] }}</p>
                    <div class="contact__address mb-6">
                      {!! $item['address'] !!}
                    </div>
                    <ul>
                      <li>
                        <strong>Tel:</strong> <a href="tel:{{ $item['tel'] }}">{{ $item['tel'] }}</a>
                      </li>
                      <li>
                        <strong>Fax:</strong> <a href="fax:{{ $item['fax'] }}">{{ $item['fax'] }}</a>
                      </li>
                      <li>
                        <strong>Mail:</strong> <a href="mailto:{{ $item['email'] }}">{{ $item['email'] }}</a>
                      </li>
                      <li>
                        <strong>Web:</strong> <a href="https://{{ $item['web'] }}" target="_blank">{{ $item['web'] }}</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="px-5 lg:w-1/2">
                <div class="acf-map" data-zoom="16">
                    <div class="marker" data-lat="<?php echo esc_attr($item['map']['lat']); ?>" data-lng="<?php echo esc_attr($item['map']['lng']); ?>"></div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKfRtJI92vVkgBMtsl-0Zwbu6DITIlvR4"></script>
<script type="text/javascript">
(function( $ ) {

/**
 * initMap
 *
 * Renders a Google Map onto the selected jQuery element
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @return  object The map instance.
 */
function initMap( $el ) {

    // Find marker elements within map.
    var $markers = $el.find('.marker');

    // Create gerenic map.
    var mapArgs = {
        zoom        : $el.data('zoom') || 16,
        mapTypeId   : google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map( $el[0], mapArgs );

    // Add markers.
    map.markers = [];
    $markers.each(function(){
        initMarker( $(this), map );
    });

    // Center map based on markers.
    centerMap( map );

    // Return map instance.
    return map;
}

/**
 * initMarker
 *
 * Creates a marker for the given jQuery element and map.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @param   object The map instance.
 * @return  object The marker instance.
 */
function initMarker( $marker, map ) {

    // Get position from marker.
    var lat = $marker.data('lat');
    var lng = $marker.data('lng');
    var latLng = {
        lat: parseFloat( lat ),
        lng: parseFloat( lng )
    };

    // Create marker instance.
    var marker = new google.maps.Marker({
        position : latLng,
        map: map
    });

    // Append to reference for later use.
    map.markers.push( marker );

    // If marker contains HTML, add it to an infoWindow.
    if( $marker.html() ){

        // Create info window.
        var infowindow = new google.maps.InfoWindow({
            content: $marker.html()
        });

        // Show info window when marker is clicked.
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open( map, marker );
        });
    }
}

/**
 * centerMap
 *
 * Centers the map showing all markers in view.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   object The map instance.
 * @return  void
 */
function centerMap( map ) {

    // Create map boundaries from all map markers.
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function( marker ){
        bounds.extend({
            lat: marker.position.lat(),
            lng: marker.position.lng()
        });
    });

    // Case: Single marker.
    if( map.markers.length == 1 ){
        map.setCenter( bounds.getCenter() );

    // Case: Multiple markers.
    } else{
        map.fitBounds( bounds );
    }
}

// Render maps on page load.
$(document).ready(function(){
    $('.acf-map').each(function(){
        var map = initMap( $(this) );
    });
});

})(jQuery);
</script>
@endsection
