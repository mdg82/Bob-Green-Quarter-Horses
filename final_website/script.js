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

