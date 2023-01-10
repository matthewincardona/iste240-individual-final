<?php
echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Newport International Boat Show</title>
    <link rel="icon" type="image/png" href="./assets/favicon-dark.png">
    <link rel="stylesheet" href="styles.css" />
    <!-- recaptcha script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="./scripts.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Arimo&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="scripts.js"></script>
  </head>
  <body>
    <header>
<!-- navbar -->
      <nav>
        <!-- wrapper for logo and navigation elements -->
        <div class="nav-container">
          <div class="logo">
            <a href="./index.php">
              <img src="./assets/logo.svg" alt="" />
            </a>
          </div>
          <div class="navbar">
            <!-- wrapper for nav items -->
            <ul class="nav-list">
              <li class="nav__item dropdown-toggle">
                About
                <!-- submenu dropdown -->
                <ul class="dropdown">
                  <li class="nav__item">
                    <a href="./event-info.php">Event Info</a>
                  </li>
                  <li class="nav__item">
                    <a href="./location.php">Location</a>
                  </li>
                </ul>
              </li>
              <li class="nav__item dropdown-toggle">
                Sponsors
                <!-- submenu dropdown -->
                <ul class="dropdown">
                  <li class="nav__item">
                    <a href="./exhibitors.php">Exhibitors</a>
                  </li>
                  <li class="nav__item">
                    <a href="./boat-brands.php">Boat Brands</a>
                  </li>
                </ul>
              </li>
              <li class="nav__item dropdown-toggle">
                Boats on Display
                <!-- submenu dropdown -->
                <ul class="dropdown">
                  <li class="nav__item">
                    <a href="./luxury-yachts.php">Luxury Yachts</a>
                  </li>
                  <li class="nav__item">
                    <a href="./sailboats.php">Sailboats</a>
                  </li>
                  <li class="nav__item">
                    <a href="./motorboats.php">Motorboats</a>
                  </li>
                </ul>
              </li>
              <li class="nav__item"><a href="./faq.php">FAQ</a></li>
              <li class="nav__item"><a href="./comments.php">Comments</a></li>
              <li class="nav__item"><a href="./contact.php">Contact</a></li>
              <li class="nav__item dropdown-toggle">
                More
                <!-- submenu dropdown -->
                <ul class="dropdown">
                  <li class="nav__item">
                    <a href="./reference.php">Reference</a>
                  </li>
                  <li class="nav__item">
                    <a href="./grading.php">Grading</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    '
?>