/*$("#search-icon").click(function() {
  $(".nav").toggleClass("search");
  $(".nav").toggleClass("no-search");
  $(".search-input").toggleClass("search-active");
});

$('.menu-toggle').click(function(){
   $(".nav").toggleClass("mobile-nav");
   $(this).toggleClass("is-active");
});*/

/*window.addEventListener('scroll', function(){
	let header = document.querySelector('header');
	header.classList.toggle('sticky', window,scrollY > 0);
});*/

function toggleMenu() {
	var menuToggle = document.querySelector('.toggle');
	var menu = document.querySelector('.menu');
	menuToggle.classList.toggle('active');
	menu.classList.toggle('active');
} 

/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector("header").style.top = "0";
  } else {
    document.querySelector("header").style.top = "-175px";
  }
  prevScrollpos = currentScrollPos;
}

$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
  
      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
    /*$(".info").fadeIn(1000);
    setTimeout(function(){
      $(".info").fadeIn(1000);
  }, 1000)*/
  });
});

/*setTimeout(function(){
  $(".info").fadeIn(1000);
}, 1000)*/

//onClick="window.location.href='service.html#section-1';"


