window.onload = function() {
  setTimeout( function() {
    var anchors = document.getElementById( 'pinboard_linkroll' ).getElementsByTagName( 'a' );
    for ( var i = 0; i < anchors.length; i++ ) {
      anchors[i].setAttribute( 'target', '_blank' );
    }
  }, 500 );
};