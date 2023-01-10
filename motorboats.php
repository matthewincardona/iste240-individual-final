      <?php include './header.php' ?>
      <!-- Page breadcrumbs -->
      <div class="breadcrumbs">
        <img class="breadcrumbs__img" src="./assets/boat.jpg" alt="" />
        <div class="breadcrumbs__title">
          <h2>Motorboats</h2>
        </div>
      </div>
    <main>
      <!-- Create a two column section with a picture-->
      <div class="l-grid-container">
        <div class="l-grid__descr">
          <p>
            If you’re looking for something powerful, this is the place to be.
            Boaters come from around the country to show off their suped-up
            setups, meaning you’re likely to see 3 and 4 outboards on a single
            boat and horsepower pushing well past 1200.
            <br />
            <br />
            There’s also a number of electric engines on display, both on boats
            themselves and available as a demo in some of the exhibitor tents.
            Keep up-to-date with the newest in electric outboard techology and
            see how far they can take your boat.
          </p>
        </div>

        <div class="l-grid__img">
          <img src="./assets/boat.jpg" alt="" />
        </div>
      </div>
                  <!-- image gallery and lightbox -->
<div class="l-image-gallery">
  <div class="l-image-gallery__item">
    <img src="./assets/motorboats/P9180099-min.JPG" onclick="openLightbox();currentSlide(1)" class="lightbox-img">
  </div>
  <div class="l-image-gallery__item">
    <img src="./assets/motorboats/P9180103-min.JPG" onclick="openLightbox();currentSlide(2)" class="lightbox-img">
  </div>
  <div class="l-image-gallery__item">
    <img src="./assets/motorboats/P9180104-min.JPG" onclick="openLightbox();currentSlide(3)" class="lightbox-img">
  </div>
  <div class="l-image-gallery__item">
    <img src="./assets/motorboats/P9180112-min.JPG" onclick="openLightbox();currentSlide(4)" class="lightbox-img">
  </div>
  <div class="l-image-gallery__item">
    <img src="./assets/motorboats/P9180114-min.JPG" onclick="openLightbox();currentSlide(4)" class="lightbox-img">
  </div>
  <div class="l-image-gallery__item">
    <img src="./assets/motorboats/P9180129-min.JPG" onclick="openLightbox();currentSlide(4)" class="lightbox-img">
  </div>
</div>

<!-- lightbox effect & image storage -->
<div id="lightbox" class="lightbox">
  <span class="close-btn cursor" onclick="closeLightbox()">&times;</span>
  <div class="lightbox-content">

    <div class="img-slide">
      <img src="./assets/motorboats/P9180099-min.JPG" style="width:100%">
    </div>

    <div class="img-slide">
      <img src="./assets/motorboats/P9180103-min.JPG" style="width:100%">
    </div>

    <div class="img-slide">
      <img src="./assets/motorboats/P9180104-min.JPG" style="width:100%">
    </div>

    <div class="img-slide">
      <img src="./assets/motorboats/P9180112-min.JPG" style="width:100%">
    </div>

    <div class="img-slide">
      <img src="/assets/motorboats/P9180114-min.JPG" style="width:100%">
    </div>

    <div class="img-slide">
      <img src="./assets/motorboats/P9180129-min.JPG" style="width:100%">
    </div>

    <!-- lightbox controls -->
    <a id="prev" onclick="addRemoveSlides(-1)">&#10094;</a>
    <a id="next" onclick="addRemoveSlides(1)">&#10095;</a>
</div>
    </main>
  </body>
</html>
