<?php
/**
 * The template for displaying the footer.
 *
 * Contains the footer content and wp_footer() function.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<footer>
    <div class="container">
      <div class="foot-content">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="foot-box">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="">

              <div class="foot-social">
                <a class="button" href="https://www.linkedin.com/company/westernstarsaudi/" target="_blank">
                  <span class="button__icon"><i class="fa-brands fa-linkedin-in"></i></span>
                  <span class="button__text">Linkedin</span>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="foot-box foot-text">
              <h4>Contact Details</h4>
              <h5>Address:</h5>
              <ul class="list">
                <li>
                  <i class="fa-sharp fa-regular fa-map-location-dot"></i>
                  <a href="#"> Najf Commercial Center Baladiyah Street, Jeddah 23334 Kingdom of Saudi Arabia</a>
                </li>
              </ul>
              <h5>Contact Number:</h5>
              <ul class="list">
                <li>
                  <i class="fa-regular fa-phone-volume"></i>
                  <a href="tel:+966548187650"> +966 54 818 7650</a>
                </li>
              </ul>
              <h5>Contact Email:</h5>
              <ul class="list">
                <li>
                  <i class="fa-regular fa-envelope"></i>
                  <a href="mailto:sales@wsarabia.com">sales@wsarabia.com</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="foot-box foot-text">
              <h4>Quick Links</h4>
              <ul>
                <li><a href="<?php echo home_url('/'); ?>"><i class="fa-solid fa-angles-right"></i> Home</a></li>
                <li><a href="<?php echo home_url('/about'); ?>"><i class="fa-solid fa-angles-right"></i> About Us</a></li>
                <li><a href="<?php echo home_url('/scaffolding-and-formwork'); ?>"><i class="fa-solid fa-angles-right"></i> Scaffolding & Formworks</a></li>
                <li><a href="<?php echo home_url('/ferro-alloys-and-minerals'); ?>"><i class="fa-solid fa-angles-right"></i> Ferro Alloys and Minerals</a></li>
                <li><a href="<?php echo home_url('/ductile-iron-pipes'); ?>"><i class="fa-solid fa-angles-right"></i> Ductile Iron Pipes</a></li>
                <li><a href="<?php echo home_url('/fencing-works'); ?>"><i class="fa-solid fa-angles-right"></i> Fencing Works</a></li>
                <li><a href="<?php echo home_url('/contact'); ?>"><i class="fa-solid fa-angles-right"></i> Contact Us</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="foot-second">
      <div class="container">
        <div class="row">
          <div class="col-lg-6"><h4>Western Star Saudi Arabia.© 2024. All Rights Reserved</h4></div>
        </div>
      </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
