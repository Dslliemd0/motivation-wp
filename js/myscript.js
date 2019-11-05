var h = ((window.innerHeight / 100) * 100);
var slideshow = document.getElementById("slideshow");
var slideshowSide = document.getElementsByClassName("slider-side-frame");

var topmenu = document.getElementById("nav-menu");
var menuBottomMargin = (topmenu.clientHeight / 100) * 79;
var menuTopMargin = (topmenu.clientHeight / 100) * 22;

var contentAfterSticky = document.getElementsByClassName("content-after-menu");


// Change Image
function changeImgSize(){
	slideshow.style.height = (h - 40) + 'px';
	slideshowSide[0].style.height = (h - 95) + 'px';
    contentAfterSticky[0].style.height = (h + 190 - menuTopMargin) + 'px';
}
// Run function when page loads
window.onload=changeImgSize;

jQuery('.menu-top-menu-container').css('margin-top', (h - menuBottomMargin) + 'px');

		

window.onscroll = function() {myFunction()};

var navbar = document.getElementsByClassName("menu-top-menu-container");
var sticky = navbar[0].offsetTop;

function myFunction() {
  if (window.pageYOffset >= (h - menuBottomMargin + menuTopMargin)) {
    navbar[0].classList.add("sticky");
    navbar[0].style.margin = (menuTopMargin * -1) + "px 0 0 0";
    slideshow.style.display = "none";
  } else {
    navbar[0].classList.remove("sticky");
    navbar[0].style.margin = (h - menuBottomMargin) + "px 0 0 0";
    slideshow.style.display = "block";
	}
}