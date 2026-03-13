<?php
/**
 * The default page template
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
            <span><?php the_title(); ?></span>
        </div>
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<section class="section-padding">
    <div class="container" style="max-width: 800px;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="fade-up">
                <?php the_content(); ?>
            </article>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
