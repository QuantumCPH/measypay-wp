<?php
/*
Plugin Name: Zerocall Products
Plugin URI: http://www.zerocall.com/
Description: Display Content for "Why Zerocal?". 
Version: 1.0

*/
class zerocall_products extends WP_Widget
{
   function zerocall_products()
	{
		$widget_options = array(
			'classname'	=> 'zerocall_products',
			'description' => __('Display Content for "Zerocall Products"') );
			
		// Call the parent class WP_Widget	
		parent::WP_Widget('zerocall_products', 'Zerocall Products', $widget_options);
	
	}
	
	function widget($args, $instance)
	{
		// Splits arguments out and makes them local variables. EXTR_SKIP 
		// protects any already created local variables
		extract( $args, EXTR_SKIP );
		
		$post_id = '327';
        $queried_post = get_post(icl_object_id($post_id)); //get_post($post_id);//get_post(icl_object_id($post_id));
       
        $title_post = $queried_post->post_title;  
		// Here if a title is set use it. If not use the default title
        
		$title = ( $instance['title'] ) ? $instance['title'] : $title_post;		
		
		// $before_widget, $after_widget, etc are used for theme compatibility
		
		echo $before_widget;
		echo $before_title . $title . $after_title;
		echo $queried_post->post_content;
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
		$post_id = '327';
		$queried_post = get_post(icl_object_id($post_id)); //get_post($post_id);//get_post(icl_object_id($post_id));
		
		$title_post = $queried_post->post_title;  
		//		 Here if a title is set use it. If not use the default title
		$title = ( $instance['title'] ) ? $instance['title'] : $title_post;	
		// Set all of the default values for the widget
		
		$defaults = array( 'title' => $title );?>
		<p>Title: <input class="nttsocialLinks" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></p>
<?php	// Grab any widget values that have been saved and merge them into an
		// array with wp_parse_args
		$instance = wp_parse_args( (array) $instance, $defaults );
	}		
}

function zerocall_products_init()
{
	// Registers a new widget to be used in your Wordpress theme
	register_widget('zerocall_products');
}

// Attaches a rule that tells wordpress to call my function when widgets are 
// initialized
add_action('widgets_init', 'zerocall_products_init');
?>