var slideNum = 1;
displaySlides(slideNum);

// add & remove slides
function addRemoveSlides(i) {
  displaySlides((slideNum += i));
}

// control images
function currentSlide(i) {
  displaySlides((slideNum = i));
}

function displaySlides(n) {
  var i;
  // get all images with class of img-slide in an array
  var slides = document.getElementsByClassName("img-slide");
  if (n > slides.length) {
    slideNum = 1;
  }
  if (n < 1) {
    slideNum = slides.length;
  }
  // check array length so you don't get an error
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideNum - 1].style.display = "block";
}

// opens lightbox
function openLightbox() {
  document.getElementById("lightbox").style.display = "block";
}

// close lightbox
function closeLightbox() {
  document.getElementById("lightbox").style.display = "none";
}
