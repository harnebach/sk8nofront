$(document).ready(function(){
  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a, .lnk_c, .link_logo, #myBtn").on('click', function(event) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
       if (target.length) {
       $('html,body').animate({
         scrollTop: target.offset().top-95
       }, 500);
       return false;
       }
    }
    });
  });

// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("nav-link");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace("active", "");
  this.className += "active";
  });
}

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


$('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});


/*
 $(document).ready(function () {
            setTimeout(function () {
                $('.navbar-collapse').collapse('hide');
            }, 5000);
        });
        */