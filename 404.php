<?php

$pagetitle = "Page Not Found - The Q Lab";

include './components/Head.php' ?>
<?php include './components/Header.php' ?>
<?php include './components/MobileHeader.php' ?>
<?php include './components/AsideHeader.php' ?>
  
  <!-- main body wrapper [ end ] -->
  <main class="main__wrapper">
    <!-- hero banner [ begin ] -->
    <section class="hero-banner">
      <div class="container">
        <div class="hero-banner__container">
          <div class="hero-banner__container__image">
            <img src="./assets/images/restaurent-image.png" alt="" />
          </div>
          <div class="hero-banner__container__content">
            <h2 class="fz-h1 text-white m-0">
              <span class="fw-light">404</span>
              <span class="d-block text-transform--uppercase">Page Not Found!</span>
            </h2>
          </div>
        </div>
      </div>
    </section>
    <!-- hero banner [ end ] -->

    <section class="about-page-sec">
      <div class="container">
        <div class="about-page-sec__container">
          <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
              <div class="about-page-sec__container__logo d-flex justify-content-center pt-2">
                <img src="./assets/images/logo--dark.svg" alt="The Q Lab Logo" width="150" />
              </div>
            </div>
            <div class="col-12 col-md-8 col-lg-9">
              <div class="about-page-sec__container__content pe-md-3">
                  <h2>Not Found (404)</h2>
                <p>
                  Sorry, the page you are looking for does not exist / The link you followed may be broken. </a>. 
                </p>
                  <p>
                  Go back to <a href="./">home</a>. 
                </p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="the-q-lab-sec d-none">
      <div class="container">
        <div class="the-q-lab-sec__container">
          <div class="the-q-lab-sec__container__infographic">
            <div class="infographic-points">
              <img src="./assets/images/q-quality-points.svg" alt="" />
              <span class="infographic-points__point infographic-points__point--qahwa">
                <span class="q-letter">Q</span>ahwa
              </span>
              <span class="infographic-points__point infographic-points__point--graders">
                <span class="q-letter">Q</span> Graders
              </span>
              <span class="infographic-points__point infographic-points__point--quintessence">
                <span class="q-letter">Q</span>uintessence
              </span>
              <span class="infographic-points__point infographic-points__point--quality">
                <span class="q-letter">Q</span>uality
              </span>
              <!-- <span class="infographic-points__point__bg">Background</span> -->
            </div>
          </div>
          <div class="the-q-lab-sec__container__content">
            <h2 class="fs-h1 text-transform--uppercase mb-4">
              <span class="fw-light d-block">The</span>
              <span class="text-primary d-block">Q</span> 
              <span class="fw-light">in</span> TQL
            </h2>
            <p style="max-width: 250px;" class="m-0">
              The <span class="text-primary fw-bold">Q</span> stands for many attributes that are linked to coffee
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="vision-sec d-none">
      <div class="container">
        <div class="vision-sec__container">
          <div class="vision-sec__container__image">
            <picture>
              <img src="./assets/images/coffee-serving.png" alt="Coffee Serving" />
            </picture>
          </div>
          <div class="vision-sec__container__content">
            <div class="text">
              <h2 class="fs-h1 text-white">Our Vision</h2>
              <p class="m-0">The <strong>Q</strong> Lab is not your ordinary coffee and by far not your standard coffee experience.</p>
            </div>
            <div class="brand-stamp">
              <img src="./assets/images/vision-stamp.svg" alt="Vision Stamp">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about-what-make-unique-sec d-none">
      <div class="container">
        <div class="about-what-make-unique-sec__container">
          <div class="about-what-make-unique-sec__container__image">
            <picture>
              <img src="./assets/images/coffee-in-spoon.png" alt="Coffee in Spoon" />
            </picture>
          </div>
          <div class="about-what-make-unique-sec__container__content">
            <h2 class="fs-h1 text-transform--uppercase mb-4">
              <span class="d-block fw-light">What makes </span>
              <span class="fw-bold white-space--nowrap text-primary">The Q Lab</span> 
              unique?
            </h2>
            <p class="pe-md-5 mb-md-4">
              The Q Lab is not your ordinary coffee and by far, not your standard coffee experience. It is about understanding and enjoying some of the greatest and most sought-after coffees from around the world. The experience goes beyond tasting coffee to understanding each coffee bean, its origin, it’s uniqueness, and the story behind it.
            </p>
            <a href="coffee.php" class="btn btn-outline-dark">
              Know more 
              <i class="fa-solid fa-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- main body wrapper [ begin ] -->

  <!-- footer [ begin ] -->
  <footer class="main-footer">
    <?php include './components/FooterCopyright.php' ?>
  </footer>
  <!-- footer [ end ] -->

<?php include './components/Footer.php' ?>