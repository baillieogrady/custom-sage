import lozad from 'lozad';
// import 'slick-carousel';

/* eslint-disable */

if (typeof Object.assign != 'function') {
  Object.assign = function (target, varArgs) {
    'use strict';
    if (target == null) { // TypeError if undefined or null
      throw new TypeError('Cannot convert undefined or null to object');
    }

    var to = Object(target);

    for (var index = 1; index < arguments.length; index++) {
      var nextSource = arguments[index];

      if (nextSource != null) { // Skip over if undefined or null
        for (var nextKey in nextSource) {
          // Avoid bugs when hasOwnProperty is shadowed
          if (Object.prototype.hasOwnProperty.call(nextSource, nextKey)) {
            to[nextKey] = nextSource[nextKey];
          }
        }
      }
    }
    return to;
  };
}
/* eslint-enable */


export default {
  init() {
    // JavaScript to be fired on all pages
    const observer = lozad('.lazy');
    observer.observe();

    // slider
    // $('.slider').slick({
    //   arrows: false,
    //   dots: true,
    //   autoplay: true,
    //   autoplaySpeed: 5000,
    // });

    // nav button
    const navButton = document.querySelector('.nav__button'),
      nav = document.querySelector('.nav');

    navButton.addEventListener('click', function (e) {
      e.preventDefault();
      nav.classList.toggle('hidden');
    })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
