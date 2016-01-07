<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
<section id="footer" class="transparent-section"
         data-bg-image="<?= get_template_directory_uri() ?>/images/backgrounds/footer.jpg"
         style="background-image: url('images/backgrounds/footer.jpg');">
    <div class="overlay relative" data-bg-color="rgba(0,0,0,0.85)" data-padding-bottom="100px"
         style="padding-bottom: 100px; background-color: rgba(0, 0, 0, 0.85098);">
        <div class="section-header"><span class="heading-effect outside"></span>

            <div class="clearfix"></div>
            <img src="<?= get_template_directory_uri() ?>/assets/img/logo-v3.png" alt="KingMa"></div>
        <div class="container">
            <div class="footer-description text-center" data-margin-bottom="65px" style="margin-bottom: 65px;">We are a
                fairly small, flexible design studio that designs for print and web. We work flexibly with clients to
                fulfil their design needs. Whether you need to create a brand from scratch, including marketing
                materials and a beautiful and functional website or whether you are looking for a design refresh<br>we
                are confident you will be pleased with the results.
            </div>
            <ul class="contact-address list-unstyled text-center" data-margin-bottom="75px"
                style="margin-bottom: 75px;">
                <li class="text-uppercase">13D, Functional Apartment, Unique Colony, California 87Q</li>
                <li>+22 369-2419-9871<br>+22 369-2419-3291</li>
                <li>info@digitalcarving.com</li>
            </ul>
            <ul class="social-icons text-center rounded medium">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul>
        </div>
    </div>
</section>
<div class="copyright">
    <div class="container">
        <div class="text-center text-uppercase"><span>Copyright © All Rights Reserved By <a href="#Digitalcarving">Digitalcarving</a></span>
        </div>
    </div>
</div>
<div id="back-to-top" class="show"><span>Top</span></div>
<div class="footer-blank"></div>
</div>
<?php wp_footer(); ?>

</body>
</html>
