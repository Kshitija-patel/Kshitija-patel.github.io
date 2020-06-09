//carrer js
//https://stackoverflow.com/questions/44107109/css-transition-effect-onload-other-than-hover-suggestions

$(document).ready(function() {
  $(".apply_now_carrers span").click(function() {
      $("#carrer_popup").fadeToggle(400);
      document.getElementById("carrer_popup").style.display = "block";
  });
});


$(document).ready(function() {
  $(".close-carrer-icon").click(function() {
      document.getElementById("carrer_popup").style.display = "none";
  });
});
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  var modal = document.getElementById('carrer_popup');
  if (event.target == modal) {
      document.getElementById("carrer_popup").style.display = "none";
  }
}
/*------------my old project reference ----------------------*/
function Validate_char(evt) {
  var keyCode = (evt.which) ? evt.which : evt.keyCode
  if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
      return false;
  return true;
}

function number_check(evt) {
  //var e = evt || window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode
  if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
  return true;
}