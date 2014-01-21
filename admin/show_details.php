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
 
        //show records - e.g. show last X imported scheduled tasks
        $('#show').click(function(){
            $.post('jquery_data.php',{action: "show"},function(res){
                $('#result').html(res);
            });        
        });
    });
</script>