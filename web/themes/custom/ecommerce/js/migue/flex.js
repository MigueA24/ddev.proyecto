(function ($, Drupal, Bootstrap) {
  'use strict';

 jQuery('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 210,
    itemMargin: 5,
    minItems: 1,
    maxItems: 5
  });

})(jQuery, Drupal, Drupal.bootstrap);
