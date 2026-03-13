<?php
/**
 * The single post template
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
            <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a>
            <span class="separator"><i class="fas fa-chevron-right"></i></span>
            <span><?php the_title(); ?></span>
        </div>
        <h1><?php the_title(); ?></h1>
        <p>
            <i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?>
            &nbsp;&middot;&nbsp;
            <i class="fas fa-user"></i> <?php the_author(); ?>
        </p>
    </div>
</section>

<section class="section-padding">
    <div class="container" style="max-width: 800px;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="fade-up">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div style="margin-bottom: 32px; border-radius: var(--radius-lg); overflow: hidden;">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>

                <div style="font-size: 1.05rem; line-height: 1.9; color: var(--color-dark-gray);">
                    <?php the_content(); ?>
                </div>
            </article>

            <div style="margin-top: 48px; padding-top: 32px; border-top: 1px solid var(--color-light-gray);">
                <?php
                the_post_navigation( array(
                    'prev_text' => '<span style="font-size: 0.85rem; color: var(--color-mid-gray);">Previous</span><br>%title',
                    'next_text' => '<span style="font-size: 0.85rem; color: var(--color-mid-gray);">Next</span><br>%title',
                ) );
                ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
