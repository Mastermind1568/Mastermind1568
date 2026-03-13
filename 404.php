<?php
/**
 * 404 page template
 *
 * @package Asabis
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <h1>Page Not Found</h1>
        <p>The page you're looking for doesn't exist or has been moved.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container text-center" style="max-width: 600px;">
        <div class="fade-up">
            <div style="font-size: 5rem; color: var(--color-secondary); margin-bottom: 24px;">
                <i class="fas fa-compass"></i>
            </div>
            <h2>404</h2>
            <p style="color: var(--color-mid-gray); margin-bottom: 32px;">Sorry, we couldn't find what you were looking for. Let's get you back on track.</p>
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                    <i class="fas fa-home"></i> Back to Home
                </a>
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-outline-dark">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
