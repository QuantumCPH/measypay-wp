<?php
/**
 * Template Name: Product Template
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
  <div class="mainbg_Inner">
    <div class="inner_pg">
      <!--Left-->
      <div class="inner_pg_left">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php //comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div>

<?php include 'product-sidebar.php' ?> 
       <!-- right outer -->
    </div>
    <!-- inner_bg -->
  </div>
  <!-- mainbg_Inner -->
<?php get_footer(); ?>