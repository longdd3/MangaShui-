
function goBack() {
  window.history.back();
}
function myFunction() {
  var x = document.getElementById("top-nav");
  if (x.className === "main-nav") {
    x.className += " responsive";
  } else {
    x.className = "main-nav";
  }
}

function darkmode() {
  var header = document.querySelector(".header-top"); 
  header.classList.toggle("dark-mode");
}

$(".outer").hover(function () {
  // over
  $(this).removeClass('in').addClass('out');
}, function () {
  // out
  $(this).removeClass('out').addClass('in');
}
);

