<?php
	
	/**
	* Laptop Config main page
	*/
	$pagetitle = "Laptop Configuration and Application Installation";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
?>

<h2>Laptop Configuration and Application Installation</h2>
<br />
<p class="stats">Make your selections below</p>
<br />

<script>

jQuery('#audit').click(function(){      
	jQuery('#cb1').attr('checked', true);   
});

jQuery('#tax').click(function(){      
	jQuery('#cb2').attr('checked', true);  
}); 

jQuery('#advisory').click(function(){
	jQuery('#cb3').attr('checked', true);   
});

jQuery('#support').click(function(){      
	jQuery('#cb4').attr('checked', true);  
}); 

jQuery('#it').click(function(){      
	jQuery('#cb5').attr('checked', true);  
}); 

</script>

<table>
	<tr>
	<td>
		<fieldset class="preconfigured"> 
			<legend>Preconfigured</legend> 
				<ul class="checkbox"> 
					<li><input type="radio" name="config" id="audit" value="audit" /><label for="audit">Audit</label></li> 
					<li><input type="radio" name="config" id="tax" value="tax" /><label for="tax">Tax</label></li> 
					<li><input type="radio" name="config" id="advisory" value="advisory" /><label for="advisory">Advisory</label></li> 
					<li><input type="radio" name="config" id="support" value="support" /><label for="support">Support</label></li>  
					<li><input type="radio" name="config" id="it" value="it" /><label for="it">IT</label></li>  
				</ul> 
		</fieldset>
	</td>
	
	<td>&nbsp;&nbsp;</td>
	
	<td>
		<fieldset class="group"> 
			<legend>Audit</legend> 
				<ul class="checkbox"> 
					<li><input type="checkbox" id="cb1" value="pepperoni" /><label for="cb1">Pepperoni</label></li> 
					<li><input type="checkbox" id="cb2" value="sausage" /><label for="cb2">Sausage</label></li> 
					<li><input type="checkbox" id="cb3" value="mushrooms" /><label for="cb3">Mushrooms</label></li> 
					<li><input type="checkbox" id="cb4" value="onions" /><label for="cb4">Onions</label></li> 
					<li><input type="checkbox" id="cb5" value="gpeppers" /><label for="cb5">Green Peppers</label></li> 
					<li><input type="checkbox" id="cb6" value="xcheese" /><label for="cb6>">Extra Cheese</label></li> 
				</ul> 
		</fieldset> 
	</td>
	
	<td>&nbsp;&nbsp;</td>
	
	<td>
		<fieldset class="group"> 
			<legend>Tax</legend> 
				<ul class="checkbox"> 
					<li><input type="checkbox" id="cb1" value="pepperoni" /><label for="cb1">Pepperoni</label></li> 
					<li><input type="checkbox" id="cb2" value="sausage" /><label for="cb2">Sausage</label></li> 
					<li><input type="checkbox" id="cb3" value="mushrooms" /><label for="cb3">Mushrooms</label></li> 
					<li><input type="checkbox" id="cb4" value="onions" /><label for="cb4">Onions</label></li> 
					<li><input type="checkbox" id="cb5" value="gpeppers" /><label for="cb5">Green Peppers</label></li> 
					<li><input type="checkbox" id="cb6" value="xcheese" /><label for="cb6>">Extra Cheese</label></li> 
				</ul> 
		</fieldset> 
	</td>
	
	<td>&nbsp;&nbsp;</td>
	
	<td>
		<fieldset class="group"> 
			<legend>Other</legend> 
				<ul class="checkbox"> 
					<li><input type="checkbox" id="cb1" value="pepperoni" /><label for="cb1">Pepperoni</label></li> 
					<li><input type="checkbox" id="cb2" value="sausage" /><label for="cb2">Sausage</label></li> 
					<li><input type="checkbox" id="cb3" value="mushrooms" /><label for="cb3">Mushrooms</label></li> 
					<li><input type="checkbox" id="cb4" value="onions" /><label for="cb4">Onions</label></li> 
					<li><input type="checkbox" id="cb5" value="gpeppers" /><label for="cb5">Green Peppers</label></li> 
					<li><input type="checkbox" id="cb6" value="xcheese" /><label for="cb6>">Extra Cheese</label></li> 
				</ul> 
		</fieldset> 
	</td>
	
	</tr>
</table>

<a href="#" class="downloadAndInstallButton">Submit</a>

<?php	
	require_once("/../inc/footer.php");
?>	