<?php
/**
 * Template Name: Careers
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
            <span>Careers</span>
        </div>
        <h1>Careers</h1>
        <p>Join our team of dedicated professionals committed to delivering exceptional financial solutions</p>
    </div>
</section>

<!-- Careers Intro -->
<section class="careers-intro section-padding">
    <div class="container">
        <div class="section-header fade-up">
            <span class="section-label">Join Our Team</span>
            <h2>Build Your Career with Asabis</h2>
            <p>We are more than just an accounting and consultancy firm — we are a team of dedicated professionals committed to delivering exceptional financial solutions.</p>
        </div>

        <!-- Values -->
        <div class="values-grid">
            <div class="value-card fade-up">
                <div class="value-icon purple">
                    <i class="fas fa-people-group"></i>
                </div>
                <h4>Collaborative Culture</h4>
                <p>We prioritize teamwork where every contribution is valued and recognized.</p>
            </div>
            <div class="value-card fade-up">
                <div class="value-icon blue">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h4>Professional Growth</h4>
                <p>Continuous learning and opportunities for career advancement in a supportive environment.</p>
            </div>
            <div class="value-card fade-up">
                <div class="value-icon gold">
                    <i class="fas fa-globe"></i>
                </div>
                <h4>Industry Exposure</h4>
                <p>Work across diverse industries, broadening your professional experience and expertise.</p>
            </div>
            <div class="value-card fade-up">
                <div class="value-icon green">
                    <i class="fas fa-heart"></i>
                </div>
                <h4>Diversity &amp; Inclusion</h4>
                <p>We are an equal opportunity employer celebrating diversity in our workplace.</p>
            </div>
        </div>

        <!-- Talent Network CTA -->
        <div class="careers-cta fade-up">
            <h3>No Active Openings? Join Our Talent Network</h3>
            <p>We're always looking for talented professionals. Send your resume to our talent team and be the first to hear about new opportunities.</p>
            <p>
                <a href="mailto:<?php echo esc_attr( asabis_get_option( 'talent_email', 'talent@asabis.ca' ) ); ?>">
                    <?php echo esc_html( asabis_get_option( 'talent_email', 'talent@asabis.ca' ) ); ?>
                </a>
            </p>
        </div>

        <!-- EO Policy -->
        <div class="eo-policy fade-up">
            <p>Asabis Consulting Services is an equal opportunity employer and does not discriminate against any employee or applicant based on race, color, religion, sex, national origin or any other protected status.</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
