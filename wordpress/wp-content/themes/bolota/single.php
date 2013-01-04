<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

    <div id="outermain">
      <div class="main bg-white">
        <div class="shadow"></div>
              <div class="container">
                  <section id="maincontent" class="twelve columns">
				<?php while ( have_posts() ) : the_post(); ?>
					<!-- <nav id="nav-single">
						<h3 class="assistive-text"><?php //_e( 'Post navigation', 'twentyeleven' ); ?></h3>
						<span class="nav-previous"><?php //previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
						<span class="nav-next"><?php //next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
					</nav> -->
					<?php get_template_part( 'content-single', get_post_format() ); ?>
					<?php comments_template( '', true ); ?>
				<?php endwhile; // end of the loop. ?>
                     <div class="clear"></div><!-- clear float -->
                  </section>
                </div>
              </div>
            </div>
<?php get_footer(); ?>
