/* eslint-disable */
import swipebox from '../plugins/swipebox-master/src/js/jquery.swipebox.js';

export default {
  init() {
    $( ".swipebox" ).swipebox({
      hideBarsDelay : 5000,
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
