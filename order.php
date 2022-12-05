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

         <!--==================== ORDER ====================-->
         <section class="about section" id="about">
                <h2 class="section__title">Order</h2>
                <span class="section__subtitle">NAME</span>

                <div class="about__container container grid">
                    <input placeholder="Tafelnummer">
                    <input placeholder="wachtwoord">
                    <h1>Thema week is: .....</h1>
                    <div class="allergiën">
                    <h2>Vul hieronder uw Allergiën in</h2>
                        <div class="dropdown">
                            <button class="dropbtn">Klik hier voor allergiën</button>
                            <div class="dropdown-content">
                                Pinda 
                                <INPUT TYPE="checkbox" name="Pinda checkbox">
                                <hr class="dropown-hr">
                                Noten 
                                <INPUT TYPE="checkbox" name="Noten checkbox">
                                <hr class="dropown-hr">
                                Selderij
                                <INPUT TYPE="checkbox" name="Selderij checkbox">
                                <hr class="dropown-hr">
                                Gluten 
                                <INPUT TYPE="checkbox" name="Gluten checkbox">
                                <hr class="dropown-hr">
                                Lactose 
                                <INPUT TYPE="checkbox" name="Lactose checkbox">
                                <hr class="dropown-hr">
                                Suiker 
                                <INPUT TYPE="checkbox" name="Suiker checkbox">
                                <hr class="dropown-hr">
                                Schaaldieren 
                                <INPUT TYPE="checkbox" name="Schaaldieren checkbox">
                                <hr class="dropown-hr">
                                Sesam 
                                <INPUT TYPE="checkbox" name="Sesam checkbox">
                                <hr class="dropown-hr">
                                Sulfiet 
                                <INPUT TYPE="checkbox" name="Sulfiet checkbox">
                                <hr class="dropown-hr">
                                Ei 
                                <INPUT TYPE="checkbox" name="Ei checkbox">
                                <hr class="dropown-hr">
                                Soja 
                                <INPUT TYPE="checkbox" name="Soja checkbox">
                                <hr class="dropown-hr">
                                Koemelk 
                                <INPUT TYPE="checkbox" name="Koemelk checkbox">
                                <hr class="dropown-hr">
                                Vis 
                                <INPUT TYPE="checkbox" name="Vis checkbox">
                                <hr class="dropown-hr">
                            </div>
                        </div>

                        <h2>Vul hieronder uw Allergiën in</h2>
                            <input placeholder="kCall"></input>



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