<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
   	 	$("#toggleButton").click(function(){
    
     	   $(".menu").toggle(500);
    	});
    	
    	$("#collapseButton").click(function(){
    
     	   $(this).next().toggle(250);
    	});
    	
    	//for blocking add to cart if there is nothing in dropdown
    	$("select").ready(function(){
   			if($(this).find('option:selected').val()=="null")
       			$("#atc").attr('disabled',true)
   			else
       			$("#atc").attr('disabled',false)
});
    	
	});
</script>