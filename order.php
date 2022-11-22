<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" sizes="16x16"  href="assets/favicons/favicon-16x16.png">
        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Restaurant - Newman</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">NAME</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="../#home" class="nav__link active-link">
                                <i class="uil uil-estate nav__incon"></i> Home
                            </a>
                                    <li class="nav__item">
                                        <a href="../#services" class="nav__link">
                                            <i class="uil uil-briefcase-alt nav__incon"></i> Services
                                        </a>
                                            <li class="nav__item">
                                                <a href="../#contact" class="nav__link">
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

         <!--==================== ABOUT ====================-->
         <section class="about section" id="about">
                <h2 class="section__title">Order</h2>
                <span class="section__subtitle">NAME</span>

                <div class="about__container container grid">
                    <input placeholder="Tafelnummer">
                    <input placeholder="wachtwoord">
                    <h1>Thema week is: .....</h1>
                    <div class="allergiën">
                    <h2>Vul hieronder uw Allergiën in</h2>
                        <p>Noten</p> 
                        <INPUT TYPE="checkbox" name="Noten checkbox">
                        <p>Soja</p> 
                        <INPUT TYPE="checkbox" name="Soja checkbox">
                        <p>Eieren</p> 
                        <INPUT TYPE="checkbox" name="Eieren checkbox">
                        <p>Pinda</p> 
                        <INPUT TYPE="checkbox" name="Pinda checkbox">
                        <p>Lactose</p> 
                        <INPUT TYPE="checkbox" name="Lactose checkbox">
                        <p>Tarwe</p> 
                        <INPUT TYPE="checkbox" name="Tarwe checkbox">




                    </div>


                </div>
            </section>
        
        
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