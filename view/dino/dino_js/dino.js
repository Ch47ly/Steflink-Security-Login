/*LIBRERIA DINO-JS*/
/*licencia:gpl*/
/*Autor:Ch47ly-MininoStudio*/

/*DINO MENUS MENU CLASSIC A*/

function MenuClassicA() {
    var x = document.getElementById("dino-menu-classicAM");
    if (x.className === "dino-menu-classicAM") {
        x.className += " responsive";
    } else {
        x.className = "dino-menu-classicAM";
    }
}
function myFunction() {
  var x = document.getElementById("DinoMenuClassicA");
  if (x.className === "dino-menu-classicA") {
    x.className += " responsive";
  } else {
    x.className = "dino-menu-classicA";
  }
}

/*DINO SLIDESHOW CLASSIC A*/
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

