/*jquery*/
	//start running script once document is ready
	//changed this to hopefully solve the mess with $
	jQuery(document).ready(function($){
		
		//BUILD PAGE FIRST??
		 
		//this method is easier cos only 2 things to put in on every page
		var replaceDiv = function(html,id){
			$.get(html,function(data){
				$(id).replaceWith(data);
				//alert('+');
			});
		};
		//could check the html for the tag befor trying to replace with new html
		replaceDiv('menu.html','#menu');
		replaceDiv('footer.html','#footer');
	
	
	
		//toggle the menu using th toggle button id
   	 	$("#toggleButton").click(function(){
    
     	   $(".menu").toggle(500);
    	});
    	
    	//collapse everything in the next div under the collapse button class
    	$(".collapseButton").click(function(){
    
     	   $(this).nextAll("div").first().toggle(250);
    	});
    	
    	
    	
		
		
		//for blocking add to cart if there is nothing in dropdown
		var addCartButton = (".add-to-class");
    	//set all add to cart buttons to disabled
    	$(addCartButton).attr('disabled',true).css("background-color", "grey");

    	
    	//set the corresponding button to enabled when the select dropdown is changed
    	$("select").change(function(){
   			$(this).closest('table').nextAll(addCartButton).first().attr('disabled', false).css("background-color", "black");
		});
		
	});
	
	//put function i want to call on html outside ready but trigger from ready to make sure stuff works
	function replaceDiv (html,id){
		$.get(html,function(data){
			$(id).replaceWith(data);
				//alert('+');
		});
	};

	