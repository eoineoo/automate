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
		$('#afile').attr('checked', true);
		$('#sage').attr('checked', true);
		$('#paperchase').attr('checked', true);
		$('#vmware').attr('checked', true);
	});

	$('#tax').click(function(){  
		//deselect everything first    
		$('#afile').attr('checked', true);
		$('#ade').attr('checked', true);
		$('#ptm').attr('checked', true);
		$('#ros').attr('checked', true);
		$('#paperchase').attr('checked', true);
		$('#vmware').attr('checked', true);
	}); 

	$('#advisory').click(function(){
		$('#afile').attr('checked', true);
		$('#visio').attr('checked', true);
		$('#project').attr('checked', true);
		$('#onenote').attr('checked', true);
	});

	$('#support').click(function(){      
		$('#afile').attr('checked', true);
		$('#paperchase').attr('checked', true);
		$('#g2dic').attr('checked', true);
		$('#goldmine').attr('checked', true);
	}); 

	$('#it').click(function(){      
		$('#adug').attr('checked', true);
		$('#chrome').attr('checked', true);
		$('#configmgrtools').attr('checked', true);
		$('#dtools').attr('checked', true);
		$('#gimp').attr('checked', true);
		$('#rcdman').attr('checked', true);
		$('#firefox').attr('checked', true);
		$('#supportworks').attr('checked', true);
	}); 
});

</script>

<table class="group" border="0">
	<tr id="centerTableAndPad">
		<td colspan=6>
			<fieldset class="preconfig"><legend>PreConfigured</legend>
			<input type="radio" name="config" id="audit" value="audit" /><label for="audit">Audit</label>&nbsp;&nbsp;
			<input type="radio" name="config" id="tax" value="tax" /><label for="tax">Tax</label>&nbsp;&nbsp;
			<input type="radio" name="config" id="advisory" value="advisory" /><label for="advisory">Advisory</label>&nbsp;&nbsp;
			<input type="radio" name="config" id="support" value="support" /><label for="support">Support</label>&nbsp;&nbsp;
			<input type="radio" name="config" id="it" value="it" /><label for="it">IT Dept</label>
			</fieldset>
		</td>
	</tr>
	
	<tr>
		<td>
			<fieldset class="group">
				<legend>General</legend> 
				<ul class="checkbox"> 
					<li><input type="checkbox" id="afile_a" value="afile" disabled="disabled"/><label for="afile">@file</label></li> 
					<li><input type="checkbox" id="ade" value="ade" disabled="disabled" /><label for="ade">Adobe Digital Editions</label></li>
					<li><input type="checkbox" id="goldmine" value="goldmine" disabled="goldmine" /><label for="sage">Goldmine</label></li>
					<li><input type="checkbox" id="g2dic" value="g2dic" disabled="g2dic" /><label for="g2dic">G2Dictation</label></li>
					<li><input type="checkbox" id="paperchase" value="paperchase" disabled="disabled" /><label for="paperchase">PaperChase</label></li>
					<li><input type="checkbox" id="ptm" value="ptm" disabled="disabled" /><label for="ptm">PTM</label></li> 
					<li><input type="checkbox" id="ros" value="ros" disabled="disabled" /><label for="ros">ROS Offline</label></li>	
					<li><input type="checkbox" id="sage" value="sage" disabled="disabled" /><label for="sage">Sage Accounts Production</label></li>
				</ul>
			</fieldset>
		</td>
				
		<td>
			<fieldset class="group">
			<legend>Licensed</legend> 
				<ul class="checkbox"> 
					<li><input type="checkbox" id="project" value="project" disabled="disabled" /><label for="project">MS Project</label></li>
					<li><input type="checkbox" id="visio" value="visio" disabled="disabled" /><label for="visio">MS Visio</label></li> 
					<li><input type="checkbox" id="onenote" value="onenote" disabled="disabled" /><label for="onenote">MS OneNote</label></li> 
				</ul> 
		</fieldset> 
	</td>
	
	<td>&nbsp;&nbsp;</td>
	
	<td>
		<fieldset class="group"> 
			<legend>Other</legend> 
				<ul class="checkbox"> 
					<li><input type="checkbox" id="adug" value="adug" disabled="disabled" /><label for="adug>">Active Directory</label></li> 
					<li><input type="checkbox" id="chrome" value="chrome" /><label for="chrome>">Chrome</label></li> 
					<li><input type="checkbox" id="configmgrtools" value="configmgrtools" /><label for="configmgrtools">Config Manager Tools</label></li> 
					<li><input type="checkbox" id="dtools" value="dtools" /><label for="dtools">DAEMON Tools Lite</label></li> 
					<li><input type="checkbox" id="firefox" value="firefox" /><label for="firefox">FireFox</label></li> 
					<li><input type="checkbox" id="gimp" value="gimp" /><label for="gimp">GIMP</label></li> 
					<li><input type="checkbox" id="rcdman" value="rcdman" /><label for="rcdman>">RCD Manager</label></li>
					<li><input type="checkbox" id="supportworks" value="supportworks" /><label for="supportworks">SupportWorks</label></li> 
					<li><input type="checkbox" id="vlc" value="vlc" /><label for="vlc">VLC Player</label></li>
					<li><input type="checkbox" id="vmware" value="vmware" /><label for="vmware">VMWare View Client</label></li>
				</ul> 
		</fieldset> 
	</td>
	
	</tr>
</table>

<a href="#" class="downloadAndInstallButton">Submit</a>

<p>&nbsp;</p>

<?php	
	require_once("/../inc/footer.php");
?>	