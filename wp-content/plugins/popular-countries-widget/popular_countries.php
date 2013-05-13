<?php
/*
Plugin Name: Popular Countires
Plugin URI: http://www.zerocall.com/
Description: Display Content for "Popular Countires". 
Version: 1.0

*/
class popular_countries extends WP_Widget
{
   function popular_countries()
	{
		$widget_options = array(
			'classname'	=> 'popular_countries',
			'description' => __('Display Popular Countries') );
			
		// Call the parent class WP_Widget	
		parent::WP_Widget('popular_countries', 'Popular Countries', $widget_options);
	
	}
	
	function widget($args, $instance)
	{
		// Splits arguments out and makes them local variables. EXTR_SKIP 
		// protects any already created local variables
		extract( $args, EXTR_SKIP );
		
		$post_id = '308';
        $queried_post = get_post(icl_object_id($post_id));
       
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
		$post_id = '308';
		$queried_post = get_post(icl_object_id($post_id)); 
		
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

function popular_countries_init()
{
	// Registers a new widget to be used in your Wordpress theme
	register_widget('popular_countries');
}

// Attaches a rule that tells wordpress to call my function when widgets are 
// initialized
add_action('widgets_init', 'popular_countries_init');
?>