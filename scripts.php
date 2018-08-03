<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
   	 	$("#toggleButton").click(function(){
    
     	   $(".menu").toggle(500);
    	});
    	
    	$(".collapseButton").click(function(){
    
     	   $(this).next().toggle(250);
    	});
    	
    	//for blocking add to cart if there is nothing in dropdown
    	$("select").ready(function(){
    		$(".add-to-class").attr('disabled',true).css("background-color", "grey");
    		
    	});
    	
    	$("select").on('change', function(){
    	var button = (".add-to-class");
   			if($(this).find('option:selected').val()=="null")
       			$(button).attr('disabled',true);
   			else
       			$(button).attr('disabled',false).css("background-color", "black");
       			
		});
    	
	});
</script>