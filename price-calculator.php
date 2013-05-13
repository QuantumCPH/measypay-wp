<h2>PRICE CALCULATOR</h2>
<div class="priceblockheight">
       <h3>Select the your country:</h3>
					<div class="country_bar">
                    
       <?php   
		   global $wpdb;
		   $destinations =0;
           $sub_query ="SELECT * from country_rate";
		   $rates =  $wpdb->get_results($sub_query, OBJECT);
		   $wpdb->show_errors();
/*		    foreach ($rates as $rate):
			  echo $rate->landline;
			endforeach;
		var_dump($rates);
		   die;*/
          /*    $sub_result = mysql_query($sub_query);
		   $destinations = mysql_num_rows($sub_result);*/
		?>
                  <select  class="input" id='ratelist' name='ratelist' >
		<?php foreach ($rates as $rate): ?>

		<option value="<?php echo $rate->landline; ?>;<?php echo $rate->mobile; ?>;<?php echo $rate->sms; ?>" <?php  if($rate->id==55){ echo 'selected="selected"'; } ?> ><?php echo $rate->country; ?></option>
		<?php endforeach;?>
	</select>
						</div>
			<table width="295px" border="0">			
			  <tr>
				<td class="price_left1">Price landline:</td>
				<td class="price_right1"><span id="ll-price">Comming Soon</span></td>
			  </tr>
			  <tr>
				<td class="price_left1">Price mobile:</td>
				<td class="price_right1"><span id="m-price">Comming Soon</span></td>
			  </tr>
			</table>
            </div>
            <div class="btn2_outer"><a class="btn2" href="#">Sign Up</a></div>