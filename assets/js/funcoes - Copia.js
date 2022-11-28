$(document).ready(function() {
          var $videoSrc;
          $(".video-btn").click(function() {
            $videoSrc = $(this).data("src");
          });
          $("#myModal").on("shown.bs.modal", function(e) {
            $("#video").attr(
              "src",
              $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
            );
          });
            $("#myModal").on("hide.bs.modal", function(e) {
              $("#video").attr("src", ""); // Remove the video source.
            });

            $("#owl-carousel-filme").owlCarousel({
              autoplay: true,
              autoplayTimeout: 10000,
              autoplayHoverPause: true,
              items : 3,  
              center: true,
              nav:true,
              loop:true,
              dots: false,    
               responsive:{
                  0:{
                      items:1
                  },
                  600:{
                      items:3
                  },
                  1000:{
                      items:4
                  }
                }
              });
        });


   function debounce(func, wait, immediate) {
     var timeout;
     return function() {
       var context = this,
         args = arguments;
       var later = function() {
         timeout = null;
         if (!immediate) func.apply(context, args);
       };
       var callNow = immediate && !timeout;
       clearTimeout(timeout);
       timeout = setTimeout(later, wait);
       if (callNow) func.apply(context, args);
     };
   }
   
   var slider = document.getElementById("demo");
   var onScroll = debounce(function(direction) {
     //console.log(direction);
     if (direction == false) {
      $('.carousel-control-next').click();
     } else {
      $('.carousel-control-prev').click();
     }
   }, 100, true);
   
   slider.addEventListener("wheel", function(e) {
     e.preventDefault();
     var delta;
     if (event.wheelDelta) {
       delta = event.wheelDelta;
     } else {
       delta = -1 * event.deltaY;
     }
   
     onScroll(delta >= 0);
   });
   $('.carousel').carousel({
     interval: 6000,
     pause: "false"
   });    

