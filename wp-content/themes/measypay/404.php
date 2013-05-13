<?php
/**
 * The template for displaying 404 pages (Not Found).
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
			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( '', 'twentyeleven' ); ?></h1>
				</header>
                <br clear="all" />
				<div class="entry-content">
					<p><?php _e( 'Error 404 - Page Not Found.', 'twentyeleven' ); ?></p>

				</div><!-- .entry-content -->
			</article><!-- #post-0 -->
			</div>

<?php include 'howwork-sidebar.php' ?> 
       <!-- right outer -->
    </div>
    <!-- inner_bg -->
  </div>
  <!-- mainbg_Inner -->
<?php get_footer(); ?>