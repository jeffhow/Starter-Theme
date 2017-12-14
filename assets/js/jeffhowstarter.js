/**
 * Sample usage of Font Face Observer

(function( $ ) {

  var oldStandard = new FontFaceObserver('Old Standard TT');
  var openSans = new FontFaceObserver('Open Sans');
  
  Promise.all([oldStandard.load(), openSans.load()]).then(function () {
    $('body').addClass('fonts-loaded');
  });

})( jQuery );

**/