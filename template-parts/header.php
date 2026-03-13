<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-left">
            <a href="mailto:<?php echo esc_attr( asabis_get_option( 'contact_email', 'info@asabis.ca' ) ); ?>">
                <i class="fas fa-envelope"></i>
                <?php echo esc_html( asabis_get_option( 'contact_email', 'info@asabis.ca' ) ); ?>
            </a>
            <a href="tel:<?php echo esc_attr( str_replace( ' ', '', asabis_get_option( 'contact_phone', '+1 587-879-5183' ) ) ); ?>">
                <i class="fas fa-phone"></i>
                <?php echo esc_html( asabis_get_option( 'contact_phone', '+1 587-879-5183' ) ); ?>
            </a>
            <span>
                <i class="fas fa-clock"></i>
                <?php echo esc_html( asabis_get_option( 'contact_hours', 'Monday – Friday 8:30 AM – 5:00 PM' ) ); ?>
            </span>
        </div>
        <div class="top-bar-right">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>

<!-- Main Header -->
<header class="site-header" role="banner">
    <div class="container">
        <nav class="navbar" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'asabis' ); ?>">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php endif; ?>
                <div class="brand-text">
                    Asabis
                    <small>Consulting Services</small>
                </div>
            </a>

            <button class="navbar-toggle" aria-label="<?php esc_attr_e( 'Toggle Navigation', 'asabis' ); ?>" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'navbar-nav',
                    'walker'         => new Asabis_Nav_Walker(),
                    'items_wrap'     => '<ul class="%2$s">%3$s<li class="nav-item navbar-cta"><a href="' . esc_url( home_url( '/contact-us/' ) ) . '" class="btn btn-primary">Work with Us</a></li></ul>',
                ) );
            } else {
            ?>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>">Our Services</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Our Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a></li>
                <li class="nav-item navbar-cta">
                    <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-primary">Work with Us</a>
                </li>
            </ul>
            <?php } ?>
        </nav>
    </div>
</header>
