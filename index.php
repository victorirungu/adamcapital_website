<?php include 'meta.php'; ?>

<body class="custom-cursor">
    <!-- Custom Cursor -->
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>

    <div class="page-wrapper">
        <?php 
            include 'header.php'; 
            include 'slider.php';
            include 'about-section.php';
            include 'services.php';
            include 'our-products.php';
            include 'our-model.php';
            include 'team.php';
            include 'patners.php';
            include 'contact.php';
            include 'location.php';
            include 'footer.php';
        ?>
    </div>

    <!-- Mobile Navigation -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.html"><img src="assets/images/resources/logo-2.png" width="135" alt="Logo" /></a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li><i class="fa fa-envelope"></i><a href="mailto:info@adamcapital.co.ke">info@adamcapital.co.ke</a></li>
                <li><i class="fa fa-phone-alt"></i><a href="tel:+254728731861">+254 728 731861</a></li>
            </ul>
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Popup -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" class="thm-btn"><i class="icon-magnifying-glass"></i></button>
            </form>
        </div>
    </div>

    <!-- Scroll to Top -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>

    <!-- Vendor Scripts -->
    <script src="assets/vendors/jquery/jquery-3.6.4.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="assets/vendors/highcharts/highcharts.min.js"></script>
    <script src="assets/vendors/touch/touch-paid-min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

    <!-- Custom Scripts -->
    <script src="assets/js/sip-calculator.js"></script>
    <script src="assets/js/lumpsum-calculator.js"></script>
    <script src="assets/js/inflation.js"></script>
    <script src="assets/js/target-amount-calculator.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/sinace.js"></script>
</body>

</html>
