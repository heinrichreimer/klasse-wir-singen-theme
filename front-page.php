<?php
/**
 * @package Dara
 */

if ( 'posts' == get_option( 'show_on_front' ) ) :

	get_template_part( 'index' );

else :

get_header(); ?>

<div class="content-wrapper <?php echo esc_attr( dara_additional_class() ); ?>">

	<div id="primary" class="content-area">
        <div id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'components/page/content', 'page' ); ?>

                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
                ?>

            <?php endwhile; // end of the loop. ?>

        </div><!-- #content -->
	</div><!-- #primary -->
</div><!-- .content-wrapper -->

<?php get_footer();

endif;
