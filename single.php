<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage woody
 */

get_header();
get_sidebar();
?>
<div id="main">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<h1 class="margL"><?php the_title(); ?></h1>
                        <div class="subNav topLine">
                            <?php the_meta(); ?>
                            <?php twentyten_posted_on(); ?>
                        </div><!--/subNav-->
                        <div class="colRightSub article topLine">
						

						<?php the_content(); ?>

						</div>
                        <div class="subNav"></div>

                        <div class="colRightSub article topLine">
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

						<?php comments_template( '', true ); ?>
                        </div>
<?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>