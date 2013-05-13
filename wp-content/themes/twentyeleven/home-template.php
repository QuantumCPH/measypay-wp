<?php
/**
 * Template Name: Home Page Template
 * Description: A Page Template that shows content on home page
 *
 * @package WordPress
 * @subpackage Mawj Telecom
 * @since SMF 1.0
 */

get_header(); ?>
          
         
		<div class="body_bg">
		   <div class="body_inner">
              <div class="body_inner1"> 
			   <?php 
				$post_id = '63';
				$queried_post = get_post(icl_object_id($post_id));
				$title = $queried_post->post_title;
				 echo  $queried_post->post_content;
                ?>
              </div>  
                <br clear="all" />
                <div class="price_inner">
                <div class="price1">
					<?php 
                        $p_id = '304';
                        $p_data = get_post(icl_object_id($p_id));					
                        $page_title = $p_data->post_title;
                    ?>
                    <h2><?php echo $page_title;?></h2>
                    <?php	
                     echo  $p_data->post_content;
                    ?>
                    <div class="read_more"><a href="<?php echo get_permalink($p_id);?>">read more</a></div>
                  </div>  
                  <div class="price2">
					<?php 
                        $p_post_id = '308';
                        $p_post_data = get_post(icl_object_id($p_post_id));					
                        $page_title = $p_post_data->post_title;
                    ?>
                    <h2><?php echo $page_title;?></h2>
                    <?php	
                     echo  $p_post_data->post_content;
                    ?>
                    <div class="read_more" style="margin-top:27px;"><a href="<?php echo get_permalink($p_id);?>">read more</a></div>
                  </div>  
                  <div class="price2" style="border:0;">
		<h2>PRICE CALCULATOR</h2>
       <h3>Select the your country:</h3>
					<div class="country_bar">
                    
       <?php   
		 
		   $destinations =0;
           $sub_query ="SELECT  * from country_rate";
           $sub_result = mysql_query($sub_query);
		   $destinations = mysql_num_rows($sub_result);
		?>
                  <select  class="input" id='ratelist' name='ratelist' >
		<?php while ($row = mysql_fetch_array($sub_result)) { ?>

		<option value="<?php echo $row['landline']; ?>;<?php echo $row['mobile']; ?>;<?php echo $row['sms']; ?>" <?php  if($row['id']==55){ echo 'selected="selected"'; } ?> ><?php echo $row['country']; ?></option>
		<?php }?>
	</select>
						</div>
			<table width="295px" border="0">			
			  <tr>
				<td class="price_left1">Price landline:</td>
				<td class="price_right1"><span id="ll-price"></span> USD</td>
			  </tr>
			  <tr>
				<td class="price_left1">Price mobile:</td>
				<td class="price_right1"><span id="m-price"></span> USD</td>
			  </tr>
			</table>
            <div class="read_more" style="margin-top:50px;"><a href="#">Sign Up</a></div>
</div> 
                </div>  
                
            <div class="block_inner">
            <div class="block">
                    <?php 
                        $p_id = '320';
                        $p_data = get_post(icl_object_id($p_id));					
                        $page_title = $p_data->post_title;
                    ?>
                    <div class="hdg">
		              <div class="hdg_left"><?php echo $page_title;?></div>
                    </div>
                    <?php	
                     echo  $p_data->post_content;
                    ?>
                   <!-- <div class="read_more"><a href="<?php echo get_permalink($p_id);?>">read more</a></div>-->
            </div>
            <div class="block">
            <?php 
                        $p_id = '327';
                        $p_data = get_post(icl_object_id($p_id));					
                        $page_title = $p_data->post_title;
                    ?>
                    <div class="hdg">
		              <div class="hdg_left"><?php echo $page_title;?></div>
                    </div>
                    <?php	
                     echo  $p_data->post_content;
                    ?>
                    <div class="sep"><a href="<?php echo get_permalink(347);?>">read more</a></div>
            </div>
		   <div class="block newsblock">
            <div class="hdg">
                <div class="hdg_left">Latest News</div>
            </div>
            <div class="slidewrap2" data-autorotate="3000">
            <div class="slider">
              <?php query_posts('cat=11&showposts=5&order=DESC'); ?>
				<?php while (have_posts()) : the_post(); ?>
                   <div class="slide">
                       <?php 
					     if ( has_post_thumbnail() ) {
	                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                         } 
					   ?>
                        <!--<a href="<?php echo get_permalink($post->ID)?>">--><img src="<?php echo $image[0];?>" width="300" height="114" alt="<?php the_title();?>" /><!--</a>-->
                        <p class="title">
                         <!-- <a href="<?php echo get_permalink($post->ID)?>">--><?php the_title();?><!--</a>--><br />
                          <span><?php echo date("j F Y",strtotime($post->post_date));?></span>
                       </p>	 
                       <?php the_content();?>
                   </div>
                <?php endwhile;?>
            </div> 
          </div>  
            <script>
              $('.slidewrap2').carousel({
				slider: '.slider',
				slide: '.slide',
				addNav: true,
				auto:true,
				nextSlide : '.next',
				prevSlide : '.prev',
				addPagination: true,
				speed: 300 // ms.
			});
            </script>  
		   </div>
		</div>    
                
           </div>
        </div>   
<?php get_footer(); ?>