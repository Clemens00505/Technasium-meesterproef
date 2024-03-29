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
                <a href="#" class="nav__logo">Variety</a>

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
                    <input class="input_order" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Tafelnummer">
                    <input class="input_order" type="email" id="email" pattern=".+@gmail\.com" size="30" required placeholder="E-mail">
                <div class="thema-left">
                    <h1>Thema week is: Duitsland</h1>
                    <br>
                        <img src="assets/img/Flag_of_Germany.png" alt="Vlag Duitsland">
                        <br>
                        <h4>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </h4>
                </div>
                    <div class="allergiën-right">
                    <h1>Vul hier uw voorwaarden in:</h1>
                    <h2>Allergiën</h2>
                        <div class="dropdown">
                            <button onclick="myFunction()" class="dropbtn">Klik hier voor allergiën</button>
                            <div id="myDropdown" class="dropdown-content">
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

                        <h2>Max. aantal kCall</h2>
                            <input class="input_order" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="kCall"></input>
                            <br>
                            <button class="dropbtn">Order</button>

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