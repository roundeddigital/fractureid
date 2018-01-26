<?php // remove this php tag when placed in snippets plugin
add_action('wp_footer', 'colorDate');
function colorDate() {
?>
<script defer = "defer" type = "text/javascript">
  window.onload = function() {
    // Footer change color for active day
    var n = new Date();
    var d = n.getDay();
    var names = ["sun","mon","tue","wed","thu","fri","sat"];
    for (var x=0; x<names.length; x++) {
      console.log(names[x]);
    	if (d == x) {
        console.log(names[x]);
    		document.getElementById(names[x]).style.color = '#008afa';
    	}
    }
  }
</script>
<?php
}
?> <!-- remove this php tag when placed in snippets plugin -->
