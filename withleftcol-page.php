<?php
/**
 * Template Name: Page with left col
 *
 * The homepage for this site
 *
 * @package WordPress
 * @subpackage woody
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                                <h2 class="margL"><?php the_title(); ?></h2>
                                <div class="subNav topLine">
                                    <?php the_meta(); ?>
                                </div><!--/subNav-->
                                <div class="colRightSub topLine">
                                <?php the_content(); ?>
                                <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
                                <?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

				<?php comments_template( '', true ); ?>
                                </div>

<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>