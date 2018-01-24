
<?php // remove this php tag when placed in snippets plugin
add_action('wp_footer', 'trackForms');
function trackForms() {
?>
<script defer = "defer" type = "text/javascript">
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

  // Use client tracking ID here
  ga('create', 'UA-XXXXXXXX-1', 'auto');

  // Contact Form 7 Google Analytics Tracking
  document.addEventListener('wpcf7mailsent', function(event) {
    // console.log("Form 7 ID = ",event.detail.contactFormId);
    // ADD Contact 7 Form ID's and Google Analytics information here
    // [contact_form_7_id, ga_form_category, ga_form_action, ga_form_label, ga_form_value]

    var formIds = [
      [8, "Form Submission (Appointment)", "submit", "appointment"],
      [55955, "Form Submission (General)", "submit", "general"],
      [56063, "Form Submission (Career)", "submit", "career"]
    ];

    for (var i = 0; i < formIds.length; i++) {
      var formId = formIds[i][0];
      console.log("Each Form ID = ", formId);
      if (event.detail.contactFormId == formId) {
        var category = formIds[i][1];
        var action = formIds[i][2];
        var label = formIds[i][3];
        console.log("Google Analytics Category = ", category);
        console.log("Google Analytics Action = ", action);
        console.log("Google Analytics Label = ", label);
        ga('send', 'event', category, action, label);
      }
    }
  }, false);
</script>
<?php
}
?> // remove this php tag when placed in snippets plugin
