jQuery(document).ready(function($e) {
  $('.post-edit-link').hide()
  .closest('.post-edit-link-hover').hover(
      function () { $('.post-edit-link', this).fadeIn("fast"); },
      function () { $('.post-edit-link', this).fadeOut("fast");}
  );
});