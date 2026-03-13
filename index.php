<?php
/**
 * The main template file (blog listing)
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
            <span>Our Blog</span>
        </div>
        <h1>Our Blog</h1>
        <p>Insights, tips, and updates from the Asabis team</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="services-detail-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="service-detail-card fade-up" id="post-<?php the_ID(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" style="display:block; margin-bottom: 20px; border-radius: var(--radius-md); overflow: hidden;">
                                <?php the_post_thumbnail( 'medium_large' ); ?>
                            </a>
                        <?php endif; ?>
                        <h3><a href="<?php the_permalink(); ?>" style="color: var(--color-heading);"><?php the_title(); ?></a></h3>
                        <p style="font-size: 0.82rem; color: var(--color-mid-gray); margin-bottom: 12px;">
                            <i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?>
                        </p>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="service-link">
                            Read More <i class="fas fa-arrow-right"></i>
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '<i class="fas fa-chevron-left"></i> Previous',
                    'next_text' => 'Next <i class="fas fa-chevron-right"></i>',
                ) );
                ?>
            </div>
        <?php else : ?>
            <div class="text-center" style="padding: 60px 0;">
                <h3>No posts yet</h3>
                <p style="color: var(--color-mid-gray);">Check back soon for updates from our team.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
