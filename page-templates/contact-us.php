<?php
/**
 * Template Name: Contact Us
 *
 * @package Asabis
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span class="separator"><i class="fas fa-chevron-right"></i></span>
            <span>Contact Us</span>
        </div>
        <h1>Contact Us</h1>
        <p>We'd love to hear from you. Get in touch with our team today.</p>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section section-padding">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="fade-up">
                <h2 style="margin-bottom: 12px;">Get in Touch</h2>
                <p style="color: var(--color-mid-gray); margin-bottom: 32px;">Have a question about our services or training programs? We're here to help. Reach out to us through any of the following channels.</p>

                <div class="contact-info-cards">
                    <div class="contact-info-card">
                        <div class="card-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h4>Phone</h4>
                            <p><a href="tel:+15878795183"><?php echo esc_html( asabis_get_option( 'contact_phone', '+1 587-879-5183' ) ); ?></a></p>
                        </div>
                    </div>

                    <div class="contact-info-card">
                        <div class="card-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4>Email</h4>
                            <p><a href="mailto:<?php echo esc_attr( asabis_get_option( 'contact_email', 'info@asabis.ca' ) ); ?>"><?php echo esc_html( asabis_get_option( 'contact_email', 'info@asabis.ca' ) ); ?></a></p>
                        </div>
                    </div>

                    <div class="contact-info-card">
                        <div class="card-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4>Location</h4>
                            <p><?php echo esc_html( asabis_get_option( 'contact_address', 'Edmonton, Alberta, Canada' ) ); ?></p>
                        </div>
                    </div>

                    <div class="contact-info-card">
                        <div class="card-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h4>Business Hours</h4>
                            <p><?php echo esc_html( asabis_get_option( 'contact_hours', 'Monday – Friday 8:30 AM – 5:00 PM' ) ); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-wrap fade-up">
                <h3>Send Us a Message</h3>
                <p>Fill out the form below and we'll get back to you as soon as possible.</p>

                <?php
                // If WPForms or Contact Form 7 is active, display the shortcode
                // Otherwise, show a static HTML form
                if ( shortcode_exists( 'wpforms' ) ) {
                    // Replace 123 with your WPForms form ID
                    echo do_shortcode( '[wpforms id="123"]' );
                } elseif ( shortcode_exists( 'contact-form-7' ) ) {
                    // Replace with your CF7 shortcode
                    echo do_shortcode( '[contact-form-7 id="123" title="Contact Form"]' );
                } else {
                ?>
                <form action="#" method="post" class="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" name="first_name" class="form-control" placeholder="Your first name" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name" name="last_name" class="form-control" placeholder="Your last name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="you@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="(123) 456-7890">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control" rows="5" placeholder="How can we help you?" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; justify-content: center;">
                        Send Message <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
