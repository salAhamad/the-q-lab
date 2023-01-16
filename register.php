<?php include './components/Head.php' ?>
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
            <img src="./assets/images/restaurent-image.png" alt="Restaurent Image" />
          </div>
          <div class="hero-banner__container__content">
            <h2 class="fz-h1 text-white m-0">
              Register Your Interest
            </h2>
          </div>
        </div>
      </div>
    </section>
    <!-- hero banner [ end ] -->

    <section class="about-page-sec d-none" >
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
                <p>
                  The <strong>Q Dripper</strong> is the first ever coffee pour over designed and produced in the region and launched for the first time in <strong>Dubai</strong> as an initiative of <strong>The Q Lab</strong>.
                </p>
                <p>
                  As part of the <strong>Dubai Roadmap</strong>, The <strong>Q dripper</strong> will be produced using 3D printing technologies and therefore will be manufactured in <strong>Dubai</strong>.
                </p>
                <p>
                  The <strong>Q Dripper</strong> will also be produced in ceramic version in collaboration with local ceramic studios.
                </p>
                <p>
                  <strong>Designed</strong> and <strong>Produced</strong> by <strong>Dubai</strong> based design firm <strong>INDEX Design</strong> and designer <strong>Tariq Almadani</strong> and <strong>Industrial Designer Arash Afrasiabi</strong>, the <strong>Q Dripper</strong> will be the first coffee pour over tool to be designed and produced in the <strong> Arab World</strong> linking back the heritage of coffee back to its roots in the <strong>Arabian Peninsula</strong>.
                </p>                
                <p>
                  Interior architect and <strong> CEO of INDEX Design</strong> said:
                  <blockquote class="special-blockquote fw-semi-bold m-2">
                    "We have studied many brewing tools and methods before reaching to the final design. It was important for us to produce a unique design and one that is functioned. Industrial designer Arash added" functionality of the dripper was very important so that coffee enthusiasts can enjoy their coffee being brewed on the Q dripper. The design was made to ensure that a consistent, flavorful, and balanced coffee will be brewed using the Q dripper. Many factors were considered to allow for the coffee to flow through the dripper and procedure the best coffee taste and the right extraction giving the coffee grounds the adequate space and then continue to drip as per the expected ratios".
                  </blockquote>
                </p>
                <p>
                  <strong>Anas Almadani</strong> founder of <strong>The Q Lab</strong> said that the <strong>Q Dripper</strong> is designed to resemble an <strong>Arabic Coffee Cup</strong>, connecting the local cultural element to new methods of brewing coffee and using 3d printing to have it produced.
                  <blockquote class="special-blockquote fw-semi-bold m-2">
                    "I belive that this initiative and innovation will encourage many coffee enthusiasts to share their creative ideas and develop new coffee tools through the use of 3D printing. We are proud that the UAE is paving the way globally for such initiatives."
                  </blockquote>
                </p>
                <p>
                  The <strong>Q Dripper</strong> has been launched for the first time at the <strong>World of Coffee Dubai</strong> and will be available for commercial production in the next <strong>3 months</strong>.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    
    <section class="form-sec mb-3">
      <div class="container">
        <div class="form-sec__container">
          <h3 class="mb-4">
            <span class="fw-light d-block">Feel Free to drop your</span>
            <span class="text-primary">Message/Query</span>
          </h3>
          <hr />
          
            <div>
            <form action="index.html" method="post" id="contact_form" class="mt-4">  
              
              
            <div class="form__block">
              <label for="" class="form__block__label">Full Name <span class="mandatory">*</span></label>
              <input type="text" class="form__block__input" id="name" name="name" placeholder="Enter Name..." />
                <p id="name_error" class="error">Enter Full Name</p>
            </div>
                
              
            <div class="form__block">
              <label for="" class="form__block__label">Contact Number <span class="mandatory">*</span></label>
              <input type="text" class="form__block__input" id="phone" name="phone" placeholder="Phone Number" />
                <p id="phone_error" class="error">Enter Contact Number</p>
            </div>
                
            <div class="form__block">
              <label for="" class="form__block__label">Email Address <span class="mandatory">*</span></label>
              <input type="text" class="form__block__input" id="email" name="email" placeholder="Enter Email ID" />
                <p id="email_error" class="error">Enter Email</p>
            </div>
                
                
             <div class="form__block">
              <label for="" class="form__block__label">Country <span class="mandatory">*</span></label>
              <input type="text" class="form__block__input" placeholder="Enter Country" name="country" id="country" />
                 <p id="country_error" class="error">Enter Country</p>
            </div> 
                
            <div class="form__block">
              <label for="" class="form__block__label">Interested to buy the Q Dripper (Yes / No) <span class="mandatory">*</span></label>
              <input type="text" class="form__block__input" placeholder="Enter Your Interest" name="interest" id="interest" />
                <p id="interest_error" class="error">Enter Your Interest</p>
            </div>  
            
            <div class="form__block">
              <label for="" class="form__block__label">Quantity to be Purchased <span class="mandatory">*</span></label>
              <input type="text" class="form__block__input" placeholder="Enter Quantity" name="quantity" id="quantity" />
                <p id="quantity_error" class="error">Enter Quantity</p>
            </div>     
                
            <div class="form__block">
              <label for="" class="form__block__label"> Individual / Company (If Company kindly specify the Complete Name) <span class="mandatory">*</span></label>
              <input type="text" class="form__block__input" placeholder="Enter Individual / Company" name="company" id="company" />
                <p id="company_error" class="error">Enter Individual / Company</p>
            </div>
                
             <div class="form__block">
              <label for="" class="form__block__label">Shipping Address <span class="mandatory">*</span></label>
              <textarea name="address" id="address" class="form__block__input form__block__textarea" cols="30" rows="3" placeholder="Enter Shipping Address"></textarea>
                 <p id="address_error" class="error">Enter Shipping Address</p>
            </div>    
                
            <div class="form__block">
              <label for="" class="form__block__label">Comments /  Feedback <span class="mandatory">*</span></label>
              <textarea name="message" id="message" class="form__block__input form__block__textarea" cols="30" rows="3" placeholder="Enter Comments /  Feedback"></textarea>
                <p id="message_error" class="error">Enter Comments /  Feedback</p>
            </div>
                
            <div class="form__block">
                
              <button class="btn btn-primary" id="send_message" type="submit">
                Submit
                <i class="fa-solid fa-paper-plane"></i>
              </button>
                
              <!--  <input type="submit" id="send_message" class="btn btn-primary" value="Submit" />-->
          <p id="mail_success" class="success">Thank you for your interest. We will get back to you soon.</p>
          <p id="mail_fail" class="error">Sorry, an error has occured. Please try again later.</p>
                
            </div>
                
          </form>
            </div>

            
            
        </div>
      </div>
    </section>
  </main>
  <!-- main body wrapper [ begin ] -->

  <!-- footer [ begin ] -->
  <footer class="main-footer">
    <section class="footer-gallery-sec top-strip-color-body-bg d-none">
      <div class="container">
        <div class="footer-gallery-sec__slider">
          <div class="footer-gallery-sec__slider__slide">
            <div class="footer-gallery-sec__slider__slide__image">
              <picture>
                <source media="(max-width:465px)" srcset="./assets/images/gallery-image-1.jpg">
                <img src="./assets/images/gallery-image-1.jpg" alt="Slider one" />
              </picture>
            </div>
            <div class="footer-gallery-sec__slider__slide__content">
              <div class="footer-gallery-sec__slider__slide__content__sub">
                <h3 class="mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, quibusdam.
                </h3>
              </div>
            </div>
          </div>
          <div class="footer-gallery-sec__slider__slide">
            <div class="footer-gallery-sec__slider__slide__image">
              <picture>
                <source media="(max-width:465px)" srcset="./assets/images/gallery-image-1.jpg">
                <img src="./assets/images/gallery-image-1.jpg" alt="Slider one" />
              </picture>
            </div>
            <div class="footer-gallery-sec__slider__slide__content">
              <div class="footer-gallery-sec__slider__slide__content__sub">
                <h3 class="mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, quibusdam.
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="main-footer__content">
        <div class="main-footer__content__know-more-btn d-none">
          <a href="#" class="btn btn-outline-light">Know More <i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="main-footer__content__nav my-5">
          <ul class="main-footer__content__nav__menu">
            <li><a href="contact.html">Contact</a></li>
            <li><a href="#">Privary Policy</a></li>
            <li><a href="#">Terms and Conditions</a></li>
          </ul>
        </div>
        <div class="main-footer__content__copyright text-center">
          <small>Copyright ©  <span class="current-year"></span>, Al rights reserved</small>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer [ end ] -->

<?php include './components/Footer.php' ?>