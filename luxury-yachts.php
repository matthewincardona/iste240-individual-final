      <?php include './header.php' ?>
      <!-- Page breadcrumbs -->
      <div class="breadcrumbs">
        <img class="breadcrumbs__img" src="./assets/boat.jpg" alt="" />
        <div class="breadcrumbs__title">
          <h2>Luxury Yachts</h2>
        </div>
      </div>
    <main>
      <!-- Create a two column section with a picture-->
      <div class="l-grid-container">
        <div class="l-grid__descr">
          <p>
            Enjoy a trip to the other side on one of the show’s many luxury
            yachts. See a boat you like? Take a guided tour through 65ft+ yachts
            from globally-recognized names like Gunboat. The largest of these
            boats require additional crew to pilot, essentially making them
            miniature cruise ships. They are the pinnacle of comfort and
            extravagance on the high seas.
          </p>
        </div>
        <div class="l-grid__img">
          <img src="./assets/boat.jpg" alt="" />
        </div>
      </div>
            <!-- image gallery and lightbox -->
<div class="l-image-gallery">
  <div class="l-image-gallery__item">
    <img src="./assets/luxury-yachts/P9180083-min.JPG" onclick="openLightbox();currentSlide(1)" class="lightbox-img">
  </div>
  <div class="l-image-gallery__item">
    <img src="./assets/luxury-yachts/P9180188-min.JPG" onclick="openLightbox();currentSlide(2)" class="lightbox-img">
  </div>
  <div class="l-image-gallery__item">
    <img src="./assets/luxury-yachts/P9180216-min.JPG" onclick="openLightbox();currentSlide(3)" class="lightbox-img">
  </div>
  <div class="l-image-gallery__item">
    <img src="./assets/luxury-yachts/P9180242-min.JPG" onclick="openLightbox();currentSlide(4)" class="lightbox-img">
  </div>
  <div class="l-image-gallery__item">
    <img src="./assets/luxury-yachts/P9180259-min.JPG" onclick="openLightbox();currentSlide(4)" class="lightbox-img">
  </div>
  <div class="l-image-gallery__item">
    <img src="./assets/luxury-yachts/P9180263-min.JPG" onclick="openLightbox();currentSlide(4)" class="lightbox-img">
  </div>
</div>

<!-- lightbox effect & image storage -->
<div id="lightbox" class="lightbox">
  <span class="close-btn cursor" onclick="closeLightbox()">&times;</span>
  <div class="lightbox-content">

    <div class="img-slide">
      <img src="./assets/luxury-yachts/P9180083-min.JPG" style="width:100%">
    </div>

    <div class="img-slide">
      <img src="./assets/luxury-yachts/P9180188-min.JPG" style="width:100%">
    </div>

    <div class="img-slide">
      <img src="./assets/luxury-yachts/P9180216-min.JPG" style="width:100%">
    </div>

    <div class="img-slide">
      <img src="./assets/luxury-yachts/P9180242-min.JPG" style="width:100%">
    </div>

    <div class="img-slide">
      <img src="./assets/luxury-yachts/P9180259-min.JPG" style="width:100%">
    </div>

    <div class="img-slide">
      <img src="./assets/luxury-yachts/P9180263-min.JPG" style="width:100%">
    </div>

    <!-- lightbox controls -->
    <a id="prev" onclick="addRemoveSlides(-1)">&#10094;</a>
    <a id="next" onclick="addRemoveSlides(1)">&#10095;</a>
</div>
    </main>
  </body>
</html>
