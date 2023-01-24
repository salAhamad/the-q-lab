<?php include('./components/InfoVideo.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/EasePack.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/CustomEase.min.js"></script>

<script type="javascript" src="../js/app.js"></script>

<!-- <script src="./../js/custom.js"></script> -->
<script src="./email/contact.js"></script>

<script>
    // copyright current year script //
    const currentYearSpan = document.querySelector('.current-year');
    const currentYear = new Date().getFullYear();
    currentYearSpan.innerHTML = currentYear;

    // responsive
    const windowWidth = window.innerWidth;

    const body = document.querySelector('body');
    const hamburgerButton = document.querySelector('.mobile-header__hamburger-menu');
    const closeMobileMenuButton = document.querySelector('.close-menu');
    const mobileMenu = document.querySelector('.mobile-header__menus');
    let checkMenu = false;
    const mobileMenuHandler = () => {
      hamburgerButton.addEventListener('click', () => {
        mobileMenu.classList.add('show')
        body.classList.add('no-scroll')
      });
    }
    const closeMobileMenuHandler = () => {
      closeMobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.remove('show')
        body.classList.remove('no-scroll')
      });
    }
    if(windowWidth < 991) {
      mobileMenuHandler()
      closeMobileMenuHandler()
    }    
    
    
    $(document).ready(function(){
      $('.home__slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-right"></i></button>',
      });
      $('.footer-gallery-sec__slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-angle-right"></i></button>',
      });
    });

    // GSAP Animation
    const tll = gsap.timeline({ paused: "true" });
    tll.from(".logo-box", { 
      y: '50vh',
      duration: 1.0,
      opacity: 1,
    });
    
    tll.to(".logo-box", { 
      y: 0,
      opacity: 1,
      delay: 1,
      duration: 0,
    });
    tll.from(".q-letter", { scale: "1500", duration:  2.25, });
    tll.to(".q-letter", { scale: "1", duration:  0, });
    tll.from(".the-letters", { y: -30, opacity: 0, })
    tll.to(".the-letters", { y: -2.5, opacity: 1, duration:  .1, });
    tll.from(".lab-letters", { y: -25, opacity: 0, })
    tll.to(".lab-letters", { y: -2.5, opacity: 1, duration:  .1, });
    tll.from(".tql-letters", { x: -50, opacity: 0, })
    tll.to(".tql-letters", { x: 0, opacity: 1, duration:  .1, });
    tll.to(".pre-loader-sec", {
      height: 0,
      delay: 1,
      duration: 0.75, ease: "expo.in",
    })

    window.onload = function(){ tll.play(); }

    // Vidoe
    const playVideoButton = document.querySelector('.video-play-button');
    const infoVideoSection = document.querySelector('.info-video-sec');
    const infoVideoContainer = document.querySelector('.info-video-sec__container');
    const infoVideo = document.querySelector('video');
    const infoVideoCloseButton = document.querySelector('.info-video-close-button');
    
    
    playVideoButton.addEventListener('click', (elem) => {
      const videoTll = gsap.timeline({ paused: "true" });
      infoVideoSection.style.display = "flex";
      body.classList.add('no-scroll')
      videoTll.from(infoVideoSection, { x: '-100vw', duration: 0.55 });
      videoTll.to(infoVideoSection, { x: 0, duration: 0, });
      videoTll.from(infoVideoContainer, { scale: '0.0', duration: 0.75, });
      videoTll.to(infoVideoContainer, { scale: '1.0',  duration: 0, });
      videoTll.from(infoVideoCloseButton, { y: '-10vh', duration: 0.05, });
      videoTll.to(infoVideoCloseButton, { y: 0, duration: 0, });
      videoTll.play()
    });
    

    infoVideoCloseButton.addEventListener('click', (elem) => {
      infoVideoSection.style.display = "none";
      body.classList.remove('no-scroll')        
    });
    
  </script>
</body>
</html>