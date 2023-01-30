<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/favicons/favicon-16x16.png"
    />
    <!--==================== UNICONS ====================-->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Restaurant - Newman</title>
  </head>
  <body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo">Variety</a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list grid">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">
                <i class="uil uil-estate nav__incon"></i> Home
              </a>
            </li>

            <li class="nav__item">
              <a href="#services" class="nav__link">
                <i class="uil uil-briefcase-alt nav__incon"></i> Services
              </a>
            </li>

            <li class="nav__item">
              <a href="#contact" class="nav__link">
                <i class="uil uil-message nav__incon"></i> Contact
              </a>
            </li>
          </ul>
          <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>
        <div class="nav_btns">
          <!--Theme change button-->
          <i class="uil uil-moon change-theme" id="theme-button"></i>

          <div class="nav__toggle" id="nav-toggle">
            <i class="uil uil-apps"> </i>
          </div>
        </div>
      </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
      <!--==================== HOME ====================-->
      <section class="home section" id="home">
        <div class="home__container container grid">
          <div class="home__content grid">
            <div class="home__social">
              <a href="-" target="_blank" class="home__social-icon">
                <i class="uil uil-instagram-alt"></i>
              </a>
              <a href="-" target="_blank" class="home__social-icon">
                <i class="uil uil-facebook"></i>
              </a>
              <a href="-" target="_blank" class="home__social-icon">
                <i class="uil uil-favorite"></i>
              </a>
            </div>
            <div class="home__img">
              <svg
                class="home__blob"
                viewBox="0 0 200 187"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <mask id="mask0" mask-type="alpha">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
        130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
        97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
        0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />
                </mask>
                <g mask="url(#mask0)">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
        165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
        129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
        -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />

                  <image
                    xlink:href="assets/img/food.jpg"
                    clip-path="url(#mask0)"
                    class="home__blob-img"
                    x="15"
                    y="7"
                  />
                </g>
              </svg>
            </div>
            <div class="home__data">
              <h1 class="home__title">Hi, We are Variety</h1>
              <h3 class="home__subtitle">Restaurant</h3>
              <p class="home__description">Located in Breda</p>
              <a href="order.php" class="button button--flex">
                Order <i class="uil uil-message button__icon"></i>
              </a>
            </div>
          </div>
          <div class="home__scroll">
            <a href="#services" class="home__scroll-button button--flex">
              <i class="uil uil-mouse-alt home__scroll-mouse"></i>
              <span class="home__scroll-name">Scroll down</span>
              <i class="uil uil-arrow-down home__scroll-arrow"></i>
            </a>
          </div>
        </div>
      </section>

      <!--==================== SERVICES ====================-->
      <section class="services section" id="services">
        <h2 class="section__title">Services</h2>
        <span class="section__subtitle">What do we offer</span>

        <div class="services__container container grid">
          <!--==================== SERVICES 1 ====================-->
          <div class="services__content">
            <div>
              <i class="uil uil-web-grid services__icon"></i>
              <h3 class="services__title">Concept</h3>
            </div>
            <span
              class="button button--flex button--small button--link services__button"
            >
              View more
              <i class="uil uil-arrow-right button__icon"></i>
            </span>

            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">Concept</h4>
                <i class="uil uil-times services__modal-close"></i>

                <ul class="services__modal-services grid">
                  <p>
                    Heb jij altijd al vernieuwend willen zijn, en heb jij altijd
                    al gewild dat jouw klanten iets ervaren wat hun zal
                    bijblijven? Dan is ons concept de oplossing!
                  </p>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Filters</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Kcall</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Always a suprise</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Fixed ammount of calories</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>New experience</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!--==================== SERVICES 2 ====================-->
          <div class="services__content">
            <div>
              <i class="uil uil-arrow services__icon"></i>
              <h3 class="services__title">Samenwerkingen</h3>
            </div>
            <span
              class="button button--flex button--small button--link services__button"
            >
              View more
              <i class="uil uil-arrow-right button__icon"></i>
            </span>

            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">Samenwerkingen</h4>
                <i class="uil uil-times services__modal-close"></i>

                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Toekomstig bedrijf</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Toekomstig bedrijf</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Toekomstig bedrijf</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Toekomstig bedrijf</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!--==================== SERVICES 3 ====================-->
          <div class="services__content">
            <div>
              <i class="uil uil-pen services__icon"></i>
              <h3 class="services__title">Soliciteren</h3>
            </div>
            <span
              class="button button--flex button--small button--link services__button"
            >
              View more
              <i class="uil uil-arrow-right button__icon"></i>
            </span>

            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">
                  Heb jij deze eigenschappen? <br />Dan ben jij misschien wel
                  degene die wij zoeken! Stuur ons gauw een berichtje!
                </h4>
                <i class="uil uil-times services__modal-close"></i>

                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Creatief</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Leergierig</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Sociaal</p>
                  </li>

                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Opdrachtgever gericht</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==================== CONTACT ME ====================-->
      <section class="contact section" id="contact">
        <h2 class="section__title">Contact Us</h2>
        <span class="section__subtitle"
          >questions or do you want to book? send a message!</span
        >

        <div class="contact__container container grid">
          <div>
            <div class="contact__information">
              <i class="uil uil-envelope contact__icon"></i>

              <div>
                <h3 class="contact__title">Send a email to us!</h3>
                <span class="contact__subtitle"
                  >secretariaat@newmancollege.nl</span
                >
              </div>

              <div class="contact__information">
                <i class="uil uil-phone contact__icon"></i>

                <div>
                  <h3 class="contact__title">Call us</h3>
                  <span class="contact__subtitle">076-5810450</span>
                </div>
              </div>
            </div>
          </div>
          <form action="" class="contact__form grid">
            <div class="contact__inputs grid">
              <div class="contact__content">
                <label class="contact__labal">What is your name?</label>
                <input type="text" class="contact__input" />
              </div>

              <div class="contact__content">
                <label class="contact__labal"
                  >What is your e-mail adress?</label
                >
                <input type="email" class="contact__input" />
              </div>
            </div>
            <div class="contact__content">
              <label class="contact__labal">Subject</label>
              <input type="text" class="contact__input" />
            </div>
            <div class="contact__content">
              <label class="contact__labal"
                >What message do you want to sent us?</label
              >
              <textarea
                name=""
                id=""
                cols="0"
                rows="7"
                class="contact__input"
              ></textarea>
            </div>

            <div>
              <a href="#" class="button button--flex">
                This form is not working yet. Please sent me a email or call us!
                <i class="uil uil-message button__icon"></i>
              </a>
            </div>
          </form>
        </div>
      </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
      <div class="footer__bg">
        <div class="footer__container container grid">
          <div>
            <h1 class="footer__title">Variety</h1>
            <span class="footer__subtitle">Restaurant</span>
          </div>
          <ul class="footer__links">
            <li>
              <a href="#home" class="footer__link">Home</a>
            </li>

            <li>
              <a href="#services" class="footer__link">Services</a>
            </li>

            <li>
              <a href="#contact" class="footer__link">Contact</a>
            </li>
          </ul>

          <p class="footer__copy">
            &#169; O&O Meesterproef demo website. All right reserved
          </p>
        </div>
      </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    <!--==================== SWIPER JS ====================-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
