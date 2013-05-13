<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<!--<div id="secondary" class="widget-area" role="complementary">-->
        <div class="inner_pg_right_outer">
            <!-- Why Mawj Telecom -->
            <div class="inner_pg_right">
            <?php $post_id = '304';
                  $queried_post = get_post(icl_object_id($post_id));
            ?>
              <h1><?php echo $title = $queried_post->post_title;   ?></h1>
              <?php   echo  $queried_post->post_content;  ?>
            </div> 
            <!-- End Why Mawj Telecom -->
            <!-- Popular Countries -->
            <div class="inner_pg_right">
            <?php $post_id = '308';
                  $queried_post = get_post(icl_object_id($post_id));
            ?>
              <h1><?php echo $title = $queried_post->post_title;   ?></h1>
              <?php   echo  $queried_post->post_content;  ?>
              <div class="btn" style="margin-top:27px;"><a href="#<?php //echo get_permalink($post_id);?>">read more</a></div>
            </div> 
            <!-- End Popular Countries -->
            <!-- Price Calculator -->
            <div class="inner_pg_right">
               <?php include 'price-calculator.php';?>
            </div>            
            <!-- End Price Calculator -->
            <!-- Price Calculator -->
            <div class="inner_pg_right">
            <?php $post_id = '320';
                  $queried_post = get_post(icl_object_id($post_id));
            ?>
              <h1><?php echo $title = $queried_post->post_title;   ?></h1>
              <?php   echo  $queried_post->post_content;  ?>
              <div class="btn" style="margin-top:27px;"><a href="<?php echo get_permalink(350);?>">read more</a></div>
            </div> 
            <!-- End Price Calculator -->
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
                <div class="inner_pg_right">
                    <aside id="archives" class="widget">
                        <h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
                        <ul>
                            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                        </ul>
                    </aside>
                </div>
                <div class="inner_pg_right">
				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>
                </div>
			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>