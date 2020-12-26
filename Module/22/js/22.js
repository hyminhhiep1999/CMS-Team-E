$(document).ready(function() {
  $(".btnClose").click(function() {
    closeNav();
  });
  $(".close-side-nav").click(function() {
    closeNav();
  });
  $("#openTheme").click(function() {
    openNav();
  });
});
function openNav() {
  $("#newID").css("width", "300px");
  $(".close-side-nav").css("visibility", "visible");
  $(".btnCart").css("visibility", "visible");
  $(".btnClose").css("visibility", "visible");
  $(".close-side-nav").css("opacity", "1");
}
function closeNav() {
  $("#newID").css("width", "0");
  $(".close-side-nav").css("visibility", "hidden");
  $(".btnCart").css("visibility", "hidden");
  $(".btnClose").css("visibility", "hidden");
  $(".close-side-nav").css("opacity", "0");
}
