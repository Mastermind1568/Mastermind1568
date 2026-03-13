<?php
/**
 * Template Name: About Us
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
            <span>About Us</span>
        </div>
        <h1>About Us</h1>
        <p>Empowering businesses and individuals to achieve financial excellence</p>
    </div>
</section>

<!-- Our Story -->
<section class="about-story section-padding">
    <div class="container">
        <div class="about-story-grid">
            <div class="fade-up">
                <span class="section-label" style="color: var(--color-secondary); font-family: var(--font-primary); font-size: 0.85rem; font-weight: 600; letter-spacing: 3px; text-transform: uppercase; display: block; margin-bottom: 16px;">Our Story</span>
                <h2>Dedicated to Your Financial Success</h2>
                <p>At Asabis, our mission is to empower businesses and individuals to achieve financial excellence through innovative accounting training and consultancy services.</p>
                <p>We provide exceptional bookkeeping, Accounting and tax services to help individuals and businesses navigate their financial journey with clarity and confidence.</p>
                <p>Our journey reflects dedication to helping clients reach their goals with creativity, advanced technology, and a passion for excellence.</p>
                <p>If you are looking for help to harmonize your existing/international Accounting skills with the Canadian procedures, then you are at the right place.</p>
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-primary" style="margin-top: 16px;">
                    Contact Us <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="about-visual fade-up">
                <div class="about-stat-card" style="background: var(--color-off-white); border: 1px solid var(--color-light-gray);">
                    <div class="stat-icon" style="background: rgba(46,134,171,0.12); color: var(--color-accent);"><i class="fas fa-graduation-cap"></i></div>
                    <div>
                        <h4 style="color: var(--color-heading);">Professional Training</h4>
                        <p style="color: var(--color-mid-gray);">Hands-on guided mentoring with real-world applications</p>
                    </div>
                </div>
                <div class="about-stat-card" style="background: var(--color-off-white); border: 1px solid var(--color-light-gray);">
                    <div class="stat-icon" style="background: rgba(200,169,81,0.12); color: var(--color-secondary-dark);"><i class="fas fa-briefcase"></i></div>
                    <div>
                        <h4 style="color: var(--color-heading);">Career Advancement</h4>
                        <p style="color: var(--color-mid-gray);">Helping individuals secure roles at top companies</p>
                    </div>
                </div>
                <div class="about-stat-card" style="background: var(--color-off-white); border: 1px solid var(--color-light-gray);">
                    <div class="stat-icon" style="background: rgba(39,174,96,0.12); color: var(--color-success);"><i class="fas fa-globe-americas"></i></div>
                    <div>
                        <h4 style="color: var(--color-heading);">International Skills</h4>
                        <p style="color: var(--color-mid-gray);">Harmonize global accounting with Canadian standards</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mission & Vision -->
        <div class="mission-vision-grid">
            <div class="mv-card fade-up">
                <div class="mv-icon mission">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3>Our Mission</h3>
                <p>Our mission is to empower individuals and businesses with the essential accounting knowledge and skills needed to succeed in today's dynamic financial landscape. Through comprehensive, hands-on training, we aim to foster confidence, accuracy, and efficiency in accounting practices, enabling our clients to make informed financial decisions and achieve long-term success.</p>
            </div>
            <div class="mv-card fade-up">
                <div class="mv-icon vision">
                    <i class="fas fa-eye"></i>
                </div>
                <h3>Our Vision</h3>
                <p>Our vision is to become a leader in providing the best and unique virtual Bookkeeping/Accounting Training and Consulting Services to improve our client's confidence, productivity at work, and peace of mind.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <h2 class="fade-up">Ready to Transform Your Financial Future?</h2>
        <p class="fade-up">Let us help you achieve your financial goals with expert training and professional services.</p>
        <div class="cta-buttons fade-up">
            <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-secondary btn-lg">
                Get in Touch <i class="fas fa-arrow-right"></i>
            </a>
            <a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="btn btn-outline btn-lg">
                Explore Services
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
