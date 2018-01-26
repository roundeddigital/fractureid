<?php // remove this php tag when placed in snippets plugin
// function for inserting Google Analytics into the wp_head
add_action('wp_head', 'ga');
function ga() {
   if ( !is_user_logged_in() ) { // not for logged in users
  ?>
  // <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXX-X"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-UA-XXXXXXXX-X');
  </script>
  <?php
   }
}
?> <!-- remove this php tag when placed in snippets plugin -->
