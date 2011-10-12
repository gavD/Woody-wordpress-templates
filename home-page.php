<?php
/**
 * Template Name: Homepage
 *
 * The homepage for this site
 *
 * @package WordPress
 * @subpackage woody
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <div id="homepage-slider">
<div id="slides">
  <div class="slides_container">
    <div>
        <a href="/activities/students"><img title="Visible" width="672" height="241"
           alt="Students"
           class="attachment-900x9999"
           src="/wp-content/themes/woody/img/slider/studentslarge.jpg" /></a>
    </div>
    <div>
        <a href="/resources"><img src="/wp-content/uploads/2010/12/resources.jpg" width="672" height="241" alt="Resouces" title="Resources - download sermons, browse links or hire the hall "/></a>
    </div>
     <div>
       <a href="/get-involved/welcome-dinners"><img src="/wp-content/uploads/2010/12/welcome-dinners.jpg" alt="Welcome dinners" title="Welcome dinners" width="672" height="241" /></a>
    </div>
    <div>
        <a href="/get-involved/home-groups"><img src="/wp-content/uploads/2010/12/home-groups.jpg" alt="Home groups" title="Home Groups" width="672" height="241" /></a>
    </div>

    <div>
        <a href="/get-involved/baptism"><img src="/wp-content/uploads/2010/12/baptism.jpg" width="672" height="241" alt="Baptism" /></a>
    </div>
  </div>
</div>
    </div>
    <?php the_content(); ?>

    <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
    <?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

    <?php comments_template( '', true ); ?>

<?php endwhile; ?>
<script src="/wp-content/themes/woody/js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/wp-content/themes/woody/js/slides.min.jquery.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" charset="utf-8">
		$(function(){
            $('#homepage-slider').show();
			$('#slides').slides({
			//	preload: true,
			//	preloadImage: 'img/loading.gif',
            generateNextPrev: true,
				play: 5000,
				pause: 2500,
				hoverPause: true
			});
		});
</script>

<?php get_footer(); ?>
