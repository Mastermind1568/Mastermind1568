<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-brand">
                <div class="brand-text">
                    Asabis
                    <small>Consulting Services</small>
                </div>
                <p>Empowering businesses and individuals to achieve financial excellence through innovative accounting training and consultancy services.</p>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-column">
                <h4>Quick Links</h4>
                <?php
                if ( has_nav_menu( 'footer' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'container'      => false,
                        'menu_class'     => 'footer-links',
                    ) );
                } else {
                ?>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>">Our Services</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Our Blog</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a></li>
                </ul>
                <?php } ?>
            </div>

            <!-- Services -->
            <div class="footer-column">
                <h4>Our Services</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>">Payroll Services</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>">Bookkeeping Services</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>">Tax Filing Services</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>">Consulting Services</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>">Accounts Payable Training</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-column">
                <h4>Contact Us</h4>
                <ul class="footer-contact">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php echo esc_html( asabis_get_option( 'contact_address', 'Edmonton, Alberta, Canada' ) ); ?></span>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <a href="tel:<?php echo esc_attr( str_replace( ' ', '', asabis_get_option( 'contact_phone', '+1 587-879-5183' ) ) ); ?>">
                            <?php echo esc_html( asabis_get_option( 'contact_phone', '+1 587-879-5183' ) ); ?>
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:<?php echo esc_attr( asabis_get_option( 'contact_email', 'info@asabis.ca' ) ); ?>">
                            <?php echo esc_html( asabis_get_option( 'contact_email', 'info@asabis.ca' ) ); ?>
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        <span><?php echo esc_html( asabis_get_option( 'contact_hours', 'Monday – Friday 8:30 AM – 5:00 PM' ) ); ?></span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Asabis Consulting Services. All rights reserved.</p>
            <p>Powered by <a href="https://wordpress.org" target="_blank" rel="noopener">WordPress</a></p>
        </div>
    </div>
</footer>
