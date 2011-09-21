<?php
/**
 * Template Name: Page with banner
 *
 * Template that is the same as the default one, but you have to supply your
 * own banner
 *
 * @package WordPress
 * @subpackage woody
 */

get_header();
get_sidebar(); ?>
<div id="main">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div class="subNav"></div>
    <div class="colRightSub topLine">
    <?php the_content(); ?>
    <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
    <?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

    <?php comments_template( '', true ); ?>
    </div>

<?php endwhile; ?>
</div>
<?php get_footer(); ?>