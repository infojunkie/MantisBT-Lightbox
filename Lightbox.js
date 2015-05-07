"use strict";

document.addEventListener("DOMContentLoaded", function(event) {
  var tr = document.getElementById("attachments").parentElement.parentElement;
  var a = tr.getElementsByTagName("a");
  for (var i = 0; i < a.length; i++) {
    // Skip delete and download links.
    if (-1 === a[i].className.indexOf('small') && '_blank' !== a[i].getAttribute('target')) {
      a[i].setAttribute("rel", "lightbox");
    }
  }
});
