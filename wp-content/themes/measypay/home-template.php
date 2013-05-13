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
          
         
		
              <div class="body_inner1"> 
			   <?php 
			    $bdrclass = false;
				$post_id = '63';
				$lang_post_id = icl_object_id($post_id);
				if(isset($lang_post_id) && $lang_post_id!=NULL){
				  $queried_post = get_post($lang_post_id);					
				  $title = $queried_post->post_title;
				  echo  $queried_post->post_content;
				  $bdrclass = true;
				} 
                ?>
                <div class="demo_btn">
                <?php 
					$pg_id = '841';
					$lang_pg_id = icl_object_id($pg_id);
					if(isset($lang_pg_id) && $lang_pg_id!=NULL){
					  $queried_post = get_post($lang_pg_id);					
					  $title = $queried_post->post_title;
					  echo  $queried_post->post_content;
					  $bdrclass = true;
					} 
                ?>
                </div>
              </div>  
              
                <br clear="all" />
                <div class="price_inner  <?php echo ($bdrclass)?"":"no-bdr";?>">
                <div class="price1">
                  <div class="blockheight">
					<?php 
                        $p_id = '304';
						$lang_pg_id = icl_object_id($p_id);
					      if(isset($lang_pg_id) && $lang_pg_id!=NULL){
						    $queried_post = get_post($lang_pg_id);					
                            $page_title = $queried_post->post_title;
                    ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($lang_pg_id)); ?>
                    <?php
					   if(isset($image)&& $image != NULL){ 
					?>
                      <div class="img2">
                       <img src="<?php echo $image[0];?>" width="<?php echo $image[1];?>" height="<?php echo $image[2];?>" alt="<?php the_title();?>" title="<?php the_title();?>" />
                      </div>  
					<?php      
					   }
					?>
                          <h2><?php echo $page_title;?></h2>
                         <?php echo  $queried_post->post_content; ?>
					<?php							
						  }
                    ?>                    
                   </div> 
                    <div class="btn2_outer"><a class="btn2" href="<?php echo get_permalink($lang_pg_id);?>">read more</a></div>
                  </div>  
                  <div class="price2">
                    <div class="blockheight">
					<?php 
                        $p_post_id = '308';
						$lang_pg_id = icl_object_id($p_post_id);
                        $p_post_data = get_post($lang_pg_id);					
                        $page_title = $p_post_data->post_title;
                    ?>
                    <?php $image2 = wp_get_attachment_image_src( get_post_thumbnail_id($lang_pg_id), 'large'); ?>
                    <?php
					   if(isset($image2)&& $image2 != NULL){ 
					?>					 
                      <div class="img2">
                       <img src="<?php echo $image2[0];?>" width="<?php echo $image2[1];?>" height="<?php echo $image2[2];?>" alt="<?php the_title();?>" title="<?php the_title();?>" />
                      </div>  
					<?php      
					   }
					?>
                    <h2><?php echo $page_title;?></h2>
                    <?php	
                     echo  $p_post_data->post_content;
                    ?>
                     </div>
                    <div class="btn2_outer"><a class="btn2" href="<?php echo get_permalink($lang_pg_id);?>">read more</a></div>
                  </div>  
                    <div class="price2" style="border:0;background:none;">   
                     <div class="blockheight">  
						 <?php 
                            $p_post_id = '1093';
                            $lang_pg_id = icl_object_id($p_post_id,"post",false);
                            $p_post_data = get_post($lang_pg_id);					
                            $page_title = $p_post_data->post_title;
                        ?>
                        <?php $image2 = wp_get_attachment_image_src( get_post_thumbnail_id($lang_pg_id), 'large'); ?>
                        <?php
                           if(isset($image2)&& $image2 != NULL){ 
                        ?>					 
                          <div class="img2">
                           <img src="<?php echo $image2[0];?>" width="<?php echo $image2[1];?>" height="<?php echo $image2[2];?>" alt="<?php the_title();?>" title="<?php the_title();?>" />
                          </div>  
                        <?php      
                           }
                        ?>
                        <h2><?php echo $page_title;?></h2>
                        <?php	
                         echo  $p_post_data->post_content;
                        ?></div>
                        <div class="btn2_outer"><a class="btn2" href="<?php echo get_permalink($lang_pg_id);?>">read more</a></div>
                    </div> 
                </div>  
                
            <div class="block_inner">
            <div class="block">
               <div class="newblockheight">
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
                 </div>   
                   <div class=""><a href="<?php echo get_permalink(350);?>">read more</a></div>
            </div>
            <div class="block">
              <div class="newblockheight">
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
                    </div>
                    <div class="sep"><a href="<?php echo get_permalink(347);?>">read more</a></div>
            </div>
		   <div class="block newsblock">
           <div class="newblockheight">
            <div class="hdg">
                <div class="hdg_left">Latest News</div>
            </div>
            <div class="slidewrap2" data-autorotate="3000">
            <div class="slider">
              <?php 
			    $catid = icl_object_id(11,"category",true);
				query_posts('cat='.$catid.'&showposts=5&order=DESC'); ?>
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
              jQuery('.slidewrap2').carousel({
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
            <div class=""><a href="<?php echo get_category_link(11);?>">read more</a></div> 
		   </div>
		</div>    
                
           
<?php get_footer(); ?>