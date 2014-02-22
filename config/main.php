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
<p class="smaller">Batch script included in each download</p>


<script type="text/javascript">

$(function() {
	$('#audit').click(function(){      
		//deselect everything first
		$('input[type=checkbox]').each(function() { 
			this.checked = false; 
		});
		//select audit applications
		$('#afile').attr('checked', true);
		$('#sage').attr('checked', true);
		$('#paperchase').attr('checked', true);
		$('#vmware').attr('checked', true);
	});

	$('#tax').click(function(){  
		//deselect everything first
		$('input[type=checkbox]').each(function() { 
			this.checked = false; 
		});
		//select tax applications
		$('#afile').attr('checked', true);
		$('#ade').attr('checked', true);
		$('#ptm').attr('checked', true);
		$('#ros').attr('checked', true);
		$('#paperchase').attr('checked', true);
		$('#vmware').attr('checked', true);
	}); 

	$('#advisory').click(function(){
		//deselect everything first
		$('input[type=checkbox]').each(function() { 
			this.checked = false; 
		});
		//select advisory applications
		$('#afile').attr('checked', true);
		$('#visio').attr('checked', true);
		$('#project').attr('checked', true);
		$('#onenote').attr('checked', true);
	});

	$('#support').click(function(){
		//deselect everything first
		$('input[type=checkbox]').each(function() { 
			this.checked = false; 
		});
		//select support applications	
		$('#afile').attr('checked', true);
		$('#paperchase').attr('checked', true);
		$('#g2dic').attr('checked', true);
		$('#goldmine').attr('checked', true);
	}); 

	$('#it').click(function(){
		//deselect everything first
		$('input[type=checkbox]').each(function() { 
			this.checked = false; 
		});
		//select IT applications
		$('#afile').attr('checked', true);
		$('#adug').attr('checked', true);
		$('#chrome').attr('checked', true);
		$('#configmgrtools').attr('checked', true);
		$('#dtools').attr('checked', true);
		$('#gimp').attr('checked', true);
		$('#rcdman').attr('checked', true);
		$('#firefox').attr('checked', true);
		$('#supportworks').attr('checked', true);
	}); 
	
	$('#none').click(function(){
		//deselect everything first
		$('input[type=checkbox]').each(function() { 
			this.checked = false; 
		});
	}); 
	
});

</script>
<form method="get">
<table class="group" border="0">
	<tr id="centerTableAndPad">
		<td colspan="6">
			<fieldset class="preconfig"><legend>PreConfigured</legend>
			<input type="radio" name="config" id="audit" value="audit" /><label for="audit">Audit</label>&nbsp;&nbsp;
			<input type="radio" name="config" id="tax" value="tax" /><label for="tax">Tax</label>&nbsp;&nbsp;
			<input type="radio" name="config" id="advisory" value="advisory" /><label for="advisory">Advisory</label>&nbsp;&nbsp;
			<input type="radio" name="config" id="support" value="support" /><label for="support">Support</label>&nbsp;&nbsp;
			<input type="radio" name="config" id="it" value="it" /><label for="it">IT Dept</label>
			<input type="radio" name="config" id="none" value="none" /><label for="none">None</label>
			</fieldset>
		</td>
	</tr>
	
	<tr>
		<td>
			<fieldset class="group">
				<legend>General</legend> 
				<ul class="checkbox"> 
					<li><input type="checkbox" name="config[]" id="afile" value="afile" disabled="disabled"/><label for="afile">@file</label></li> 
					<li><input type="checkbox" name="config[]" id="ade" value="ade" disabled="disabled" /><label for="ade">Adobe Digital Editions</label></li>
					<li><input type="checkbox" name="config[]" id="goldmine" value="goldmine" disabled="goldmine" /><label for="sage">Goldmine</label></li>
					<li><input type="checkbox" name="config[]" id="g2dic" value="g2dic" disabled="g2dic" /><label for="g2dic">G2Dictation</label></li>
					<li><input type="checkbox" name="config[]" id="paperchase" value="paperchase" disabled="disabled" /><label for="paperchase">PaperChase</label></li>
					<li><input type="checkbox" name="config[]" id="ptm" value="ptm" disabled="disabled" /><label for="ptm">PTM</label></li> 
					<li><input type="checkbox" name="config[]" id="ros" value="ros" disabled="disabled" /><label for="ros">ROS Offline</label></li>	
					<li><input type="checkbox" name="config[]" id="sage" value="sage" disabled="disabled" /><label for="sage">Sage Accounts Production</label></li>
				</ul>
			</fieldset>
		</td>
				
		<td>
			<fieldset class="group">
			<legend>Licensed</legend> 
				<ul class="checkbox"> 
					<li><input type="checkbox" name="config[]" id="project" value="project" disabled="disabled" /><label for="project">MS Project</label></li>
					<li><input type="checkbox" name="config[]" id="visio" value="visio" disabled="disabled" /><label for="visio">MS Visio</label></li> 
					<li><input type="checkbox" name="config[]" id="onenote" value="onenote" disabled="disabled" /><label for="onenote">MS OneNote</label></li> 
				</ul> 
		</fieldset> 
	</td>
	
	<td>&nbsp;&nbsp;</td>
	
	<td>
		<fieldset class="group"> 
			<legend>Other</legend> 
				<ul class="checkbox"> 
					<li><input type="checkbox" name="config[]" id="adug" value="adug" disabled="disabled" /><label for="adug>">Active Directory</label></li> 
					<li><input type="checkbox" name="config[]" id="chrome" value="chrome" /><label for="chrome>">Chrome</label></li> 
					<li><input type="checkbox" name="config[]" id="configmgrtools" value="configmgrtools" /><label for="configmgrtools">Config Manager Tools</label></li> 
					<li><input type="checkbox" name="config[]" id="dtools" value="dtools" /><label for="dtools">DAEMON Tools Lite</label></li> 
					<li><input type="checkbox" name="config[]" id="firefox" value="firefox" /><label for="firefox">FireFox</label></li> 
					<li><input type="checkbox" name="config[]" id="gimp" value="gimp" /><label for="gimp">GIMP</label></li> 
					<li><input type="checkbox" name="config[]" id="rcdman" value="rcdman" /><label for="rcdman>">RCD Manager</label></li>
					<li><input type="checkbox" name="config[]" id="supportworks" value="supportworks" /><label for="supportworks">SupportWorks</label></li> 
					<li><input type="checkbox" name="config[]" id="vlc" value="vlc" /><label for="vlc">VLC Player</label></li>
					<li><input type="checkbox" name="config[]" id="vmware" value="vmware" /><label for="vmware">VMWare View Client</label></li>					
				</ul> 
		</fieldset> 		
	</td>
	</tr>
</table>
<a href="#" class="downloadAndInstallButton" onclick="$(this).closest('form').submit()">Submit Link</a>

</form>

<p>&nbsp;</p>

<?php

	$checked = $_GET['config'];
	for($i=0; $i < count($checked); $i++)	{
		echo $checked[$i] . "<br/>";
	}
	require_once("/../inc/footer.php");
?>	