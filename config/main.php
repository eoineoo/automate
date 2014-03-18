<?php
	session_start();
	/**
	* Laptop Config main page
	*/
	$pagetitle = "Laptop Configuration and Application Installation";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	checkLogin();
	
	#Variable - array that will contain the values of what is selected
	$_POST['config'] = array("");
?>

<div style="width: 60%;">
	<h2 class="scheduledTaskForm">Laptop Config and Application Installation</h2>
	<div class="alert-box warning"><span>note: </span>Select individual applications from the form below or choose a preconfigured list. This will prompt you to download a PowerShell script that must be executed from a command line shell. Batch file included in all scripts.<br />Example usage: <b>powershell -noexit "&" "<em>&#60;path_to file&#62;</em>\config.ps1"</b></div>
</div>


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
		$('#vmware').attr('checked', true);
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
		$('#vmware').attr('checked', true);
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

<form action="download.php" method="post">
	<table class="group" border="0">
		<tr id="centerTableAndPad">
			<td colspan="6">
				<fieldset class="preconfig"><legend>PreConfigured</legend>
				<input type="radio" name="config" id="audit" value="audit" /><label for="audit">Audit</label>&nbsp;&nbsp;
				<input type="radio" name="config" id="tax" value="tax" /><label for="tax">Tax</label>&nbsp;&nbsp;
				<input type="radio" name="config" id="advisory" value="advisory" /><label for="advisory">Advisory</label>&nbsp;&nbsp;
				<input type="radio" name="config" id="support" value="support" /><label for="support">Support</label>&nbsp;&nbsp;
				<input type="radio" name="config" id="it" value="it" /><label for="it">IT Dept</label>&nbsp;&nbsp;
				<input type="radio" name="config" id="none" value="none" /><label for="none">None</label>
				</fieldset>
			</td>
		</tr>
	
		<tr>
			<td>
				<fieldset class="group">
					<legend>General</legend> 
					<ul class="configCheckboxesDisabled"> 
						<li>
							<input type="checkbox" name="config[]" id="afile" value="afile" disabled="disabled"/><label for="afile">@file</label>
						</li> 
						<li>
							<input type="checkbox" name="config[]" id="ade" value="ade" disabled="disabled" /><label for="ade">Adobe Digital Editions</label>
						</li>
						<li>
							<input type="checkbox" name="config[]" id="goldmine" value="goldmine" disabled="goldmine" /><label for="sage">Goldmine</label>
						</li>
						<li>
							<input type="checkbox" name="config[]" id="g2dic" value="g2dic" disabled="g2dic" /><label for="g2dic">G2Dictation</label>
						</li>
						<li>
							<input type="checkbox" name="config[]" id="paperchase" value="paperchase" disabled="disabled" /><label for="paperchase">PaperChase</label>
						</li>
						<li>
							<input type="checkbox" name="config[]" id="ptm" value="ptm" disabled="disabled" /><label for="ptm">PTM</label>
						</li> 
						<li>
							<input type="checkbox" name="config[]" id="ros" value="ros" disabled="disabled" /><label for="ros">ROS Offline</label>
						</li>	
						<li>
							<input type="checkbox" name="config[]" id="sage" value="sage" disabled="disabled" /><label for="sage">Sage Accounts Production</label>
						</li>
					</ul>
				</fieldset>
			</td>
				
			<td>
				<fieldset class="group">
				<legend>Licensed</legend> 
					<ul class="configCheckboxesDisabled"> 
						<li>
							<input type="checkbox" name="config[]" id="project" value="project" disabled="disabled" /><label for="project">MS Project</label>
						</li>
						<li>
							<input type="checkbox" name="config[]" id="visio" value="visio" disabled="disabled" /><label for="visio">MS Visio</label>
						</li> 
						<li>
							<input type="checkbox" name="config[]" id="onenote" value="onenote" disabled="disabled" /><label for="onenote">MS OneNote</label>
						</li> 
					</ul> 
				</fieldset> 
			</td>
		
			<td>&nbsp;&nbsp;</td>
		
			<td>
				<fieldset class="group"> 
					<legend>Other</legend> 
						<ul class="configCheckboxes"> 
							<li>
								<input type="checkbox" name="config[]" id="adug" value="ade_3.0_installer.msi" disabled="disabled" /><label for="adug">Active Directory</label>
							</li>
							<li>
								<input type="checkbox" name="config[]" id="chrome" value="GoogleChromeStandaloneEnterprise.msi" /><label for="chrome">Google Chrome</label>
							</li> 
							<li>
								<input type="checkbox" name="config[]" id="configmgrtools" value="ConfigMgrTools.msi" /><label for="configmgrtools">Config Manager Tools</label>
							</li> 
							<li>
								<input type="checkbox" name="config[]" id="dtools" value="dtlite4481-0347.msi" /><label for="dtools">DAEMON Tools Lite</label>
							</li> 
							<li>
								<input type="checkbox" name="config[]" id="firefox" value="FirefoxESR-24.2.0-en-GB.msi" /><label for="firefox">FireFox</label>
							</li> 
							<li>
								<input type="checkbox" name="config[]" id="gimp" value="gimp-2.2.8+gtk-2.6.8-1-en_US.msi" /><label for="gimp">GIMP</label>
							</li> 
							<li>
								<input type="checkbox" name="config[]" id="rcdman" value="RDCMan.msi" /><label for="rcdman">RCD Manager</label>
							</li>
							<li>
								<input type="checkbox" name="config[]" id="supportworks" value="supportworks" disabled="disabled" /><label for="supportworks">SupportWorks</label></li> 
							<li>
								<input type="checkbox" name="config[]" id="vlc" value="vlc-2.0.6-intel.msi" /><label for="vlc">VLC Player</label>
								</li>
							<li>
								<input type="checkbox" name="config[]" id="vmware" value="vmware" disabled="disabled" /><label for="vmware">VMWare View Client</label>
							</li>					
						</ul> 
				</fieldset> 		
			</td>
		</tr>
	</table>

	<a href="#" class="downloadAndInstallButton" onclick="$(this).closest('form').submit()">Submit</a>

</form>

<p>&nbsp;</p>

<?php

	$_SESSION['array'] = $_POST['config'];	
	
	require_once("/../inc/footer.php");
?>	














