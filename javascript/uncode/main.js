<script defer = "defer" type = "text/javascript">
  window.onload = function() {

    /* ========================================================================================== */
    // Footer change color for active day

    var n = new Date();
    var d = n.getDay();

    if (d == 0) document.getElementById('sun').style.color = '#008afa';
    if (d == 1) document.getElementById('mon').style.color = '#008afa';
    if (d == 2) document.getElementById('tue').style.color = '#008afa';
    if (d == 3) document.getElementById('wed').style.color = '#008afa';
    if (d == 4) document.getElementById('thu').style.color = '#008afa';
    if (d == 5) document.getElementById('fri').style.color = '#008afa';
    if (d == 6) document.getElementById('sat').style.color = '#008afa';

    /* ========================================================================================== */
    // Google Analytics code used to track contact 7 forms

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
    // ga('create', 'UA-XXXXXXX-1', 'auto');

    /* ========================================================================================== */
    // Contact Form 7 Google Analytics Tracking

    document.addEventListener('wpcf7mailsent', function(event) {
      // console.log("Form 7 ID = ",event.detail.contactFormId);
      // ADD Contact 7 Form ID's and Google Analytics information here
      // [contact_form_7_id, ga_form_category, ga_form_action, ga_form_label, ga_form_value]

      var formIds = [
        // [55955, "General Form Submission", "submit", "general"],
        // [56063, "Career Form Submission", "submit", "career"],
        // [68658, "Gallery Form Submission", "submit", "gallery"]
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

	/* ========================================================================================== */
	// Modal Window

	// "Submit New Case/Claim" Form
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

	function openModal() {
		if (modal) {
			console.log("Modal exists on page");
  		modal.style.display = "block";
		} else {
      console.log("Error: no modal on page");
    }
	}
	span.onclick = function() {
		modal.style.display = "none";
	}
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
}

/* ========================================================================================== */
// Footer Links
jQuery("a.link-facebook").attr("href", "http://cupcream.com");


</script>
