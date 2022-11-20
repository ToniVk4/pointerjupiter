$ = jQuery;

$(document).ready(function () {
  $(".toggle-nav").click(function (e) {
    $("#primary-menu-list").slideToggle(500);

    e.preventDefault();
  });
});