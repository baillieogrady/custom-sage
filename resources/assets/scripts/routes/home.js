import React from 'react'
import ReactDom from 'react-dom'
import Articles from '../components/articles'

export default {
  init() {
    // JavaScript to be fired on the home page
    ReactDom.render(<Articles/>, document.getElementById('banter'));
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
