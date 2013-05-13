<?php
/**
 * Template Name: Press News Template
 * Description: A Page Template that shows content on home page
 *
 * @package WordPress
 * @subpackage Mawj Telecom
 * @since SMF 1.0
 */

get_header(); ?>
          
<div class="mainbg_Inner">
  <div class="inner_pg">
		    <div class="inner_pg_left"> 
              <div class="inner_pg_left_text">
                <h1><?php the_title(); ?></h1>
              </div>
              <br clear="all" />
                <?php query_posts('cat=11');?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
                
            </div>
          <?php include 'pressnews-sidebar.php'; ?> 
         
  </div>
  <!-- inner_bg -->
</div>
<!-- mainbg_Inner -->  
<?php get_footer(); ?>