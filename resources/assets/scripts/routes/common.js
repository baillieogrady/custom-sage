import lozad from 'lozad';

export default {
  init() {
    // JavaScript to be fired on all pages
    const observer = lozad();
    observer.observe();

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
