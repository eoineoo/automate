<?php

	$pagetitle = "JQuery Test";
	require_once("/inc/config.php");  
	require_once("/inc/header.php");  
	require_once("/inc/functions.php");
	
?>
	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    $(function(){
        //insert record
        $('#insert').click(function(){
            var jname = $('#fname').val();
			
            //syntax - $.post('filename', {data}, function(response){});
            $.post('jquery_data.php',{action: "insert", name:jname},function(res){
                $('#result').html(res);
            });        
        });
 
        //show records
        /* $('#show').click(function(){
            $.post('jquery_data.php',{action: "show"},function(res){
                $('#result').html(res);
            });        
        }); */
    });
</script>
</head>
<body>
 
<p>Name: <input type="text" id="fname" />
<button id="insert">Insert</button></p>
 
<!--<p>Show Last 10 Records</p>
<button id="show">Show</button>-->
<p>Result:</p>
<div id="result"></div>
</body>
</html>

<?php	
	require_once("/inc/footer.php");
?>