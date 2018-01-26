<?php // remove this php tag when placed in snippets plugin

add_action('wp_footer', 'modalOpen');
function modalOpen() {
?>
<script defer = "defer" type = "text/javascript">
    // "Submit New Case/Claim" Form
    if (document.querySelector(".open-modal")) {
       document.querySelector(".open-modal").addEventListener("click", openModal);
    }
    if (document.querySelector(".open-modal-menu")) {
       document.querySelector(".open-modal-menu").addEventListener("click", openModal);
    }
    if (document.querySelector(".open-modal-widget")) {
      document.querySelector(".open-modal-widget").addEventListener("click", openModal);
    }
    if (document.querySelector(".open-modal-header")) {
      document.querySelector(".open-modal-header").addEventListener("click", openModal);
    }
    var modal = document.getElementById('rdModal');
    var span = document.getElementsByClassName("close")[0];
    // var ga_tracking = document.getElementsByClassName("ga-tracking")[0];

    function openModal() {
      if (modal) {
        console.log("Modal Exists");
      }
      console.log("Open Modal");
      modal.style.display = "block";
    }
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    // ga_tracking.onclick = function() {
    //   console.log("GA Tracking on submit button clicked");
    //   ga('send', 'event', "New Case Form Submission",  "submit", "new-case");
    // }
</script>
<?php
}

?> <!-- remove this php tag when placed in snippets plugin -->
