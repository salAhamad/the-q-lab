<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="./../js/custom.js"></script>
<script src="./email/contact.js"></script>
<script>

    // copyright current year script //
    const currentYearSpan = document.querySelector('.current-year');
    const currentYear = new Date().getFullYear();
    currentYearSpan.innerHTML = currentYear;

    // responsive
    const windowWidth = window.innerWidth;

    const hamburgerButton = document.querySelector('.mobile-header__hamburger-menu');
    const closeMobileMenuButton = document.querySelector('.close-menu');
    const mobileMenu = document.querySelector('.mobile-header__menus');
    let checkMenu = false;
    const mobileMenuHandler = () => {
      hamburgerButton.addEventListener('click', () => mobileMenu.classList.add('show'));
    }
    const closeMobileMenuHandler = () => {
      closeMobileMenuButton.addEventListener('click', () => mobileMenu.classList.remove('show'));
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
        autoScroll: false,
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

    
  </script>
</body>
</html>