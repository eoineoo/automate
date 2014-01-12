<?php
	
	/**
	* Display history of mails sent to all owner(s) of all assets for the current invoice
	*/
	$pagetitle = "View Contact History";
	include("layout/header.php");
	include("inc/functions.php");
	
	#Determine what serial was selected
	if(isset($_GET['invoice']))	{
			$invoice = $_GET['invoice'];		
	}
	else	{
			$invoice = "";
	}
	
	#Connect
	$connection = mysqli_connect("localhost", "root", "", "automate");
	
	#Check connection
	if (mysqli_connect_errno())	{
		die_and_display('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	
	#Query to return contact details
	$select = "SELECT TIMESTAMP AS 'Time Sent', serial AS 'Serial', contents AS 'Contents', owner AS 'Owner' ";
	$from 	= "FROM  contact ";
	$where 	= "WHERE purchase_order_number = '$invoice' ";
	$order 	= "ORDER BY timestamp DESC";
	$sql	= $select . $from . $where . $order;
	
	$result = mysqli_query($connection, $sql);
	
?>

<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" language="javascript" src="scripts/jquery.js"></script>
    <script class="jsbin" src="scripts/jquery.dataTables.nightly.js"></script>
	<script type="text/javascript" charset="utf-8">
		/* 
		 * Filter data using text boxes 
		 * http://datatables.net/examples/api/multi_filter.html
		 */
		var asInitVals = new Array();
			
			$(document).ready(function() {
				var oTable = $('#contact_all').dataTable( {
					"oLanguage": {
						"sSearch": "Search:"
					},
					//"bPaginate": false - leaving pagination on as I expect there to be lots and lots of entries in here eventually
				} );
				
				$("thead input").keyup( function () {
					/* Filter on the column (the index) of this element */
					oTable.fnFilter( this.value, $("thead input").index(this) );
				} );
				
				
				/*
				 * Support functions to provide a little bit of 'user friendlyness' to the textboxes in 
				 * the footer
				 */
				$("thead input").each( function (i) {
					asInitVals[i] = this.value;
				} );
				
				$("thead input").blur( function (i) {
					if ( this.value == "" )
					{
						this.value = asInitVals[$("thead input").index(this)];
					}
				} );
			} );
	</script>
  </head>
  <body>
	
	<div id="container">
      <table cellpadding="0" cellspacing="0" border="1" class="hor-minimalist-a" id="contact_all">
        <thead>
		
			<tr>
				<th><input type="text" name="search_time_sent" size="10"/></th>
				<th><input type="text" name="search_serial" size="10"/></th>
				<th><input type="text" name="search_contents" size="100%"/></th>
				<th><input type="text" name="search_owner" size="10"/></th>
			</tr>
		
			<tr>
				<th>Time Sent</th>
				<th>Serial</th>
				<th>Contents</th>
				<th>Owner</th>
			</tr>
        </thead>
        <tbody>
          
<?php
	
		#Loop and print contents of SQL query
		while($row = mysqli_fetch_array($result))	{
		
			echo "<tr>";
			echo "<td>" . $row['Time Sent'] . "</td>";
			echo "<td>" . $row['Serial'] . "</td>";
			echo "<td>" . $row['Contents'] . "</td>";
			echo "<td>" . $row['Owner'] . "</td>";
			echo "</tr>";
		}
?>
		</tbody>
      </table>
    </div>

<?php

	#Free the result
	mysqli_free_result($result);
	
	include("layout/footer.php");
?>
</body>
</html>