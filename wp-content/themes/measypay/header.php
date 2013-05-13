<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();	
?>

<script type="text/javascript">
jQuery(function(){
jQuery('#ratelist').change(function () {
    var str = $(this).val();
	a = str.split(";");
	/*jQuery("#ll-price").html(a[0]);
	jQuery("#m-price").html(a[1]);
	jQuery("#s-price").html(a[2]);*/
});
 jQuery('#ratelist').trigger('change');
});
</script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slideshow.css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/plugin.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">

<!--Header-->
<div class="header_outer">
      <div class="header">
        	<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""/></a></div>
			<div class="header_rigt">
			<div class="flag">
			  <?php language_selector_flags(); ?>
	        </div>
	        <div class="navi">
				<?php  wp_nav_menu( array( 'theme_location' => 'primary','show_home' => false and 'show_home=0' ) ); ?>
            </div>
		</div>
     </div>		
</div>
    <?php if(is_front_page()):?>
     <div class="mainbg">
            <div class="mainbg_Inner">
               <div class="banner">
                 <?php if ( function_exists('show_nivo_slider') ) { show_nivo_slider(); } ?> 
               </div>
            </div>
      </div>    
    <?php else:?>
      <div class="mainbg">
            <div class="mainbg_Inner">
                <div class="banner">
                   <?php    $category = get_the_category(); $news_catId = $category[0]->cat_ID;?> 
                   <?php 
				  // icl_object_id(ID, type, return_original_if_missing,language_code)
				   if($wp_query->post->ID==icl_object_id(82,'page',true)){?> 
                   <?php 
				      $post_id = '937';
				      $queried_post = get_post(icl_object_id($post_id));					   
					  $title_post = $queried_post->post_title;  
					         if(has_post_thumbnail($post_id))  :
				                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0];?>" width="990" height="355" alt="<?php echo $title_post;?>" title="<?php echo $title_post;?>" />
					   <?php endif; ?>
                       <?php echo $queried_post->post_content;?>
                   <?php }elseif($wp_query->post->ID==icl_object_id(120,'page',true)){ ?>
				   <?php 
				      $post_id = '941';
				      $queried_post = get_post(icl_object_id($post_id));					   
					  $title_post = $queried_post->post_title;  
					         if(has_post_thumbnail($post_id))  :
				                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0];?>" width="990" height="355" alt="<?php echo $title_post;?>" title="<?php echo $title_post;?>" />
					   <?php endif; ?>
                       <?php echo $queried_post->post_content;?>   
				   <?php } elseif($wp_query->post->ID==icl_object_id(350,'page',true)){ ?>
				   <?php 
				      $post_id = '945';
				      $queried_post = get_post(icl_object_id($post_id));					   
					  $title_post = $queried_post->post_title;  
					         if(has_post_thumbnail($post_id))  :
				                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0];?>" width="990" height="355" alt="<?php echo $title_post;?>" title="<?php echo $title_post;?>" />
					   <?php endif; ?>
                       <?php echo $queried_post->post_content;?>   
				   <?php } elseif($wp_query->post->ID==icl_object_id(347,'page',true)){ ?>
				   <?php 
				      $post_id = '949';
				      $queried_post = get_post(icl_object_id($post_id));					   
					  $title_post = $queried_post->post_title;  
					         if(has_post_thumbnail($post_id))  :
				                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0];?>" width="990" height="355" alt="<?php echo $title_post;?>" title="<?php echo $title_post;?>" />
					   <?php endif; ?>
                       <?php echo $queried_post->post_content;?>   
				   <?php } elseif($wp_query->post->ID==icl_object_id(16,'page',true)){ ?>
				   <?php 
				      $post_id = '951';
				      $queried_post = get_post(icl_object_id($post_id));					   
					  $title_post = $queried_post->post_title;  
					         if(has_post_thumbnail($post_id))  :
				                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0];?>" width="990" height="355" alt="<?php echo $title_post;?>" title="<?php echo $title_post;?>" />
					   <?php endif; ?>
                       <?php echo $queried_post->post_content;?>   
				   <?php } elseif($wp_query->post->ID==icl_object_id(144,'page',true)){ ?>
				   <?php 
				      $post_id = '953';
				      $queried_post = get_post(icl_object_id($post_id));					   
					  $title_post = $queried_post->post_title;  
					         if(has_post_thumbnail($post_id))  :
				                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0];?>" width="990" height="355" alt="<?php echo $title_post;?>" title="<?php echo $title_post;?>" />
					   <?php endif; ?>
                       <?php echo $queried_post->post_content;?>   
				   <?php } elseif($wp_query->post->ID==icl_object_id(93,'page',true)){ ?>
				   <?php 
				      $post_id = '957';
				      $queried_post = get_post(icl_object_id($post_id));					   
					  $title_post = $queried_post->post_title;  
					         if(has_post_thumbnail($post_id))  :
				                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0];?>" width="990" height="355" alt="<?php echo $title_post;?>" title="<?php echo $title_post;?>" />
					   <?php endif; ?>
                       <?php echo $queried_post->post_content;?>   
				   <?php } elseif($wp_query->post->ID==icl_object_id(132,'page',true)){ ?>
				   <?php 
				      $post_id = '959';
				      $queried_post = get_post(icl_object_id($post_id));					   
					  $title_post = $queried_post->post_title;  
					         if(has_post_thumbnail($post_id))  :
				                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0];?>" width="990" height="355" alt="<?php echo $title_post;?>" title="<?php echo $title_post;?>" />
					   <?php endif; ?>
                       <?php echo $queried_post->post_content;?>   
				   <?php } elseif($wp_query->post->ID==icl_object_id(148,'page',true)){ ?>
				   <?php 
				      $post_id = '963';
				      $queried_post = get_post(icl_object_id($post_id));					   
					  $title_post = $queried_post->post_title;  
					         if(has_post_thumbnail($post_id))  :
				                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0];?>" width="990" height="355" alt="<?php echo $title_post;?>" title="<?php echo $title_post;?>" />
					   <?php endif; ?>
                       <?php echo $queried_post->post_content;?>   
				   <?php } elseif($wp_query->post->ID==icl_object_id(152,'page',true) || $news_catId == icl_object_id(11,'category',true)){ ?>
				   <?php 
				      $post_id = '967';
				      $queried_post = get_post(icl_object_id($post_id));					   
					  $title_post = $queried_post->post_title;  
					         if(has_post_thumbnail($post_id))  :
				                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0];?>" width="990" height="355" alt="<?php echo $title_post;?>" title="<?php echo $title_post;?>" />
					   <?php endif; ?>
                       <?php echo $queried_post->post_content;?>   
				   <?php } elseif($wp_query->post->ID==icl_object_id(160,'page',true)){ ?>
				   <?php 
				      $post_id = '971';
				      $queried_post = get_post(icl_object_id($post_id));					   
					  $title_post = $queried_post->post_title;  
					         if(has_post_thumbnail($post_id))  :
				                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0];?>" width="990" height="355" alt="<?php echo $title_post;?>" title="<?php echo $title_post;?>" />
					   <?php endif; ?>
                       <?php echo $queried_post->post_content;?>   
				    <?php } elseif($wp_query->post->ID==icl_object_id(1305,'page',true)){ ?>
				   <?php 
				      $post_id = '1310';
				      $queried_post = get_post(icl_object_id($post_id));					   
					  $title_post = $queried_post->post_title;  
					         if(has_post_thumbnail($post_id))  :
				                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0];?>" width="990" height="355" alt="<?php echo $title_post;?>" title="<?php echo $title_post;?>" />
					   <?php endif; ?>
                       <?php echo $queried_post->post_content;?>   
				    <?php } elseif (is_404()) { ?>
				   <?php 
				      $post_id = '953';
				      $queried_post = get_post(icl_object_id($post_id));					   
					  $title_post = $queried_post->post_title;  
					         if(has_post_thumbnail($post_id))  :
				                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0];?>" width="990" height="355" alt="<?php echo $title_post;?>" title="<?php echo $title_post;?>" />
					   <?php endif; ?>
                       <?php echo $queried_post->post_content; ?>   
				   <?php } else{ ?>
				   <?php 
				      $post_id = '967';
				      $queried_post = get_post(icl_object_id($post_id));					   
					  $title_post = $queried_post->post_title;  
					         if(has_post_thumbnail($post_id))  :
				                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0];?>" width="990" height="355" alt="<?php echo $title_post;?>" title="<?php echo $title_post;?>" />
					   <?php endif; ?>
                       <?php echo $queried_post->post_content;?>   
				    <?php }?>
                </div>
            </div>
      </div>      
    <?php endif;?>
<div class="body_bg">
		   <div class="body_inner">
