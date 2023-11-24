<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Miranda</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../resources/css/styles.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;600&family=Old+Standard+TT&family=Roboto&display=swap" rel="stylesheet" />
    <!-- Flickity -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Scripts -->
    <script src="./resources/js/script.js" defer></script>
</head>
<body>
    <header id="header">
        <div class="header_left">
            <div class="header_menu" id="header_menu"></div>
            <a href="./index.php" class="header_letterhead">
                <div class="header_hotel-logo"></div>
                <div class="header_hotel-name"></div>
            </a>
        </div>
        <div class="header_right">
            <div class="header_member-icon"></div>
            <div class="header_magnifier-icon"></div>
        </div>

        <ul id="navbar" class="navbar">
            <li class="navbar_li">
                <a class="navbar_a" href="./about.php">About Us</a>
            </li>
            <li class="navbar_li"><a class="navbar_a" href="./rooms.php">Rooms</a></li>
            <li class="navbar_li">
                <a class="navbar_a" href="./offers.php">Offers</a>
            </li>
            <li class="navbar_li">
                <a class="navbar_a" href="./contact.php">Contact</a>
            </li>
        </ul>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <!-- Footer Section -->
    <section class="footer">
        <div class="footer-content">
            <div class="footer-letterhead">H</div>
            <h2 class="footer-letterhead-text"><span>HOTEL </span>MIRANDA</h2>
            <p class="footer-paragraph">
                Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing
                eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
            </p>
            <div class="footer-socials">
                <a href="https://www.facebook.com/" class="footer-socials-facebook"></a>
                <a href="https://twitter.com/" class="footer-socials-twitter"></a>
                <a href="https://www.behance.net/" class="footer-socials-behace"></a>
                <a href="https://www.linkedin.com/" class="footer-socials-linkedin"></a>
                <a href="https://www.youtube.com/" class="footer-socials-youtube"></a>
            </div>
            <h4 class="footer-subtitle">Services.</h4>
            <div class="footer-services">
                <ul>
                    <li>+ Resturant & Bar</li>
                    <li>+ Swimming Pool</li>
                    <li>+ Wellness & Spa</li>
                    <li>+ Restaurant</li>
                    <li>+ Conference Room</li>
                    <li>+ Coctail Party House</li>
                </ul>
                <ul>
                    <li>+ Gaming Zone</li>
                    <li>+ Marrige Party</li>
                    <li>+ Party Planning</li>
                    <li>+ Tour Consultancy</li>
                </ul>
            </div>
            <h4 class="footer-subtitle footer-subtitle-contact">Contact Us.</h4>
            <div class="footer-contact-data">
                <div class="footer-contact">
                    <img class="footer-contact-icons" src="./resources/icons/footer/telephone.svg" alt="" />
                    <div>
                        <h4 class="footer-contact-title">Phone Number</h4>
                        <p class="footer-contact-subtitle">+347 876 765 76 577</p>
                    </div>
                </div>
                <div class="footer-contact">
                    <img class="footer-contact-icons" src="./resources/icons/footer/email.svg" alt="" />
                    <div>
                        <h4 class="footer-contact-title">Email</h4>
                        <p class="footer-contact-subtitle">
                            rodrigomartinez.correo@gmail.com
                        </p>
                    </div>
                </div>
                <div class="footer-contact">
                    <img class="footer-contact-icons" src="./resources/icons/footer/location.svg" alt="" />
                    <div>
                        <h4 class="footer-contact-title">Location</h4>
                        <p class="footer-contact-subtitle">Málaga - Spain</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-end">
            <p class="footer-end-copyright">Copyright By@Rodrigo - 2023</p>
            <p>Terms of use | Privacy Environmental Policy</p>
        </div>
    </section>
    <script src="./resources/js/swiper.js" type="module"></script>
</body>

</html>