<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage woody
 */

get_header();
get_sidebar(); ?>
<div id="main">
    <h1><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></h1>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <h2 class="margL"><?php the_title(); ?></h2>
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