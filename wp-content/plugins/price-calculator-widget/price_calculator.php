<?php
/*
Plugin Name: Price Calculator
Plugin URI: http://www.zerocall.com/
Description: Display Price calculator in sidebar. 
Version: 1.0

*/
class price_calculator extends WP_Widget
{
   function price_calculator()
	{
		$widget_options = array(
			'classname'	=> 'price_calculator',
			'description' => __('Display Price Calculator') );
			
		// Call the parent class WP_Widget	
		parent::WP_Widget('price_calculator', 'Price Calculator', $widget_options);
	
	}
	
	function widget($args, $instance)
	{
		// Splits arguments out and makes them local variables. EXTR_SKIP 
		// protects any already created local variables
		extract( $args, EXTR_SKIP );
		
		$post_id = '899';//905;//'899';
        $queried_post = get_page($post_id);
       
        $title_post = $queried_post->post_title;  
		// Here if a title is set use it. If not use the default title
        
		$title = ( $instance['title'] ) ? $instance['title'] : $title_post;		
		$content = file_get_contents (get_bloginfo("siteurl")."?page_id=".$post_id);
		// $before_widget, $after_widget, etc are used for theme compatibility
		//var_dump($queried_post);
		echo $before_widget;
		//echo $before_title . $title . $after_title;
		echo $content;
		echo $after_widget; 
		
    }  
	
    function update($new_instance, $old_instance)
	{
	
		$instance = $old_instance;
		
		$instance['title'] = strip_tags( $new_instance['title'] );
		
		return $instance;
	
	}


	function form($instance)
	{
		$post_id = '899';
		$queried_post = get_page($post_id); 
		
		$title_post = $queried_post->post_title;  
		//		 Here if a title is set use it. If not use the default title
		$title = ( $instance['title'] ) ? $instance['title'] : $title_post;	
		// Set all of the default values for the widget
		
		$defaults = array( 'title' => $title );?>
		<!--<p>Title: <input class="nttsocialLinks" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></p>-->
<?php	// Grab any widget values that have been saved and merge them into an
		// array with wp_parse_args
		$instance = wp_parse_args( (array) $instance, $defaults );
	}		
}

function price_calculator_init()
{
	// Registers a new widget to be used in your Wordpress theme
	register_widget('price_calculator');
}

// Attaches a rule that tells wordpress to call my function when widgets are 
// initialized
add_action('widgets_init', 'price_calculator_init');
?>