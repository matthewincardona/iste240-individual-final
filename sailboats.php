      <?php include './header.php' ?>
      <!-- Page breadcrumbs -->
      <div class="breadcrumbs">
        <img class="breadcrumbs__img" src="./assets/boat.jpg" alt="" />
        <div class="breadcrumbs__title">
          <h2>Sailboats</h2>
        </div>
      </div>
    <main>
      <!-- Create a two column section with a picture-->

      <div class="l-grid-container">
        <div class="l-grid__descr">
          <p>
            The Newport Boat Show features a variety of sailboats, from a
            2-person no-cabin setup to a full-on luxury sailing yacht with a
            complete crew. You can see all kinds of unique designs and
            materials, including some classic wooden trim and much more
            high-tech carbon fiber styles (typically reserved for those
            aforementioned luxury yachts).
            <br />
            <br />
            Whether you’re a mono-hull fan or prefer something with two or even
            3 hulls, there’s bound to be a boat that will fit your interest.
          </p>
        </div>

        <div class="l-grid__img">
          <img src="./assets/boat.jpg" alt="" />
        </div>
      </div>
      <!-- Image gallery -->
      <div class="l-image-gallery">
        <img
          class="l-image-gallery__item"
          src="./assets//sailboats/P9180161-min.JPG"
          alt=""
        />
        <img
          class="l-image-gallery__item"
          src="./assets/sailboats/P9180189-min.JPG"
          alt=""
        />
        <img
          class="l-image-gallery__item"
          src="./assets/sailboats/P9180236-min.JPG"
          alt=""
        />
        <img
          class="l-image-gallery__item"
          src="./assets/sailboats/P9180243-min.JPG"
          alt=""
        />
      </div>
                <!-- image gallery and lightbox -->
<div class="l-image-gallery">
  <div class="l-image-gallery__item">
    <img src="./assets//sailboats/P9180161-min.JPG" onclick="openLightbox();currentSlide(1)" class="lightbox-img">
  </div>
  <div class="l-image-gallery__item">
    <img src="./assets/sailboats/P9180189-min.JPG" onclick="openLightbox();currentSlide(2)" class="lightbox-img">
  </div>
  <div class="l-image-gallery__item">
    <img src="./assets/sailboats/P9180236-min.JPG" onclick="openLightbox();currentSlide(3)" class="lightbox-img">
  </div>
  <div class="l-image-gallery__item">
    <img src="./assets/sailboats/P9180243-min.JPG" onclick="openLightbox();currentSlide(4)" class="lightbox-img">
  </div>
</div>

<!-- lightbox effect & image storage -->
<div id="lightbox" class="lightbox">
  <span class="close-btn cursor" onclick="closeLightbox()">&times;</span>
  <div class="lightbox-content">

    <div class="img-slide">
      <img src="./assets//sailboats/P9180161-min.JPG" style="width:100%">
    </div>

    <div class="img-slide">
      <img src="./assets/sailboats/P9180189-min.JPG" style="width:100%">
    </div>

    <div class="img-slide">
      <img src="./assets/sailboats/P9180236-min.JPG" style="width:100%">
    </div>

    <div class="img-slide">
      <img src="./assets/sailboats/P9180243-min.JPG" style="width:100%">
    </div>

    <!-- lightbox controls -->
    <a id="prev" onclick="addRemoveSlides(-1)">&#10094;</a>
    <a id="next" onclick="addRemoveSlides(1)">&#10095;</a>
</div>
    </main>
  </body>
</html>
