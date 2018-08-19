<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	
	//start running script once document is ready
	$(document).ready(function(){
		//toggle the menu using th toggle button id
   	 	$("#toggleButton").click(function(){
    
     	   $(".menu").toggle(500);
    	});
    	
    	//collapse everything in the next div under the collapse button class
    	$(".collapseButton").click(function(){
    
     	   $(this).nextAll("div").first().toggle(250);
    	});
    	
    	//for blocking add to cart if there is nothing in dropdown
    	
    	//set all add to cart buttons to disabled
    	$("select").ready(function(){
    		$(".add-to-class").attr('disabled',true).css("background-color", "grey");
    		
    	});
    	
    	var button = (".add-to-class");
    	//set the corresponding button to enabled when the select dropdown is changed
    	$("select").change(function(){
   			$(this).closest('table').nextAll(button).first().attr('disabled', false).css("background-color", "black");
       			
		});
    	
	});
</script>