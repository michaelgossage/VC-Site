<!doctype html>
<html>

<link href='http://fonts.googleapis.com/css?family=Muli:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
		<script src="js/three.js"></script>
		<script src="js/GLTFLoader.js"></script>
		<script src="js/OrbitControls.js"></script>
		<script src="js/cloView.js"></script>
<head>

<link rel="stylesheet" href="Swiper-4.1.0/dist/css/swiper.min.css">

<style>
    .swiper-container {
    display:block;
      width: 60vw;
      max-height: 570px;
      /*margin-bottom:40px;*/
    }
    .swiper-slide {
      text-align: center;
      /*font-size: 12px;*/
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
    
    @media only screen and (max-device-width: 1080px) {
    .swiper-container {
    display:block;
      width: 100vw;
      max-height: 570px;
      /*margin-bottom:40px;*/
    }
    
    }
  </style>
	
<meta charset="UTF-8">
<title>Vacation_Culture</title>

<!--<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">-->




</head>

<body>


<div class="container">

<?php
	include 'menu.php' ;
?>

<div class="item_carosel_container">
<div id="cloView-Arc"></div>

<!-- Swiper - GOES HERE!! -->


<div class="item" style="margin-top:20px;">
		<h1>Arc de Triomphe de l'Ètoile <!--Sweatshirt--></h1>
		<p>£80.00</p>
		<!--<p>Ships on 15th June.</p>-->
		<p>White brushed cotton-polyester blend sweatshirt with a digital printed photographic design of the 
		Arc De Triomphe De l'Ètoile.</p>
		
		<button class="collapseButton">_details</button>
		<br/>
		<div style="display: none;">
			<p>_materials: 320gsm, 80% brushed cotton, 20% polyester body construction. Poly-blend silk photographic print.</p>
			<p>_sizing: Chest to fit S - 36/38", M - 38/40", L - 41/42", XL - 43/44"</p>
			<!--<p>_postage: £5.00 - Free on purchases over £100.00</p>-->
			<p>_care: Wash inside out at 30 degrees. Do not iron directly on to prints.</p>
		</div>
		<br/>
	
	<!--ADD TO CART--> 
	<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="YNVMW4CQYF2LA">
<table class="size-table">
<!--<tr><td class="dropdown-label"><input type="hidden" name="on0" value="Sizes">Sizes</td></tr>-->
<tr><td><select name="os0">
	<option value="" disabled selected>_select your size</option>
	<option value="S">S </option>
	<option value="M">M </option>
	<option value="L">L </option>
	<option value="XL">XL </option>
</select> </td></tr>
</table>
<br/>
<input value="_add-to-cart" class="add-to-class" type="submit" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
	
</div>

<hr>

<div id="cloView-Champs"></div>
<!-- Swiper - WOULD GO HERE -->

    <!-- end swiper-->

<div class="item" style="margin-top:20px;">
		<h1>Avenue des Champs-Élysées</h1>
		<p>£80.00</p>
		<p>Black brushed cotton-polyester blend sweatshirt with a digital printed photographic design combining the
		Avenue des Champs-Élysées and the paris metro.</p>
		
		<button class="collapseButton">_details</button>
		<br/>
		<div style="display: none;">
			<p>_materials: 320gsm, 80% brushed cotton, 20% polyester body construction. Poly-blend silk photographic print.</p>
			<p>_sizing: Chest to fit S - 36/38", M - 38/40", L - 41/42", XL - 43/44"</p>
			<p>_care: Wash inside out at 30 degrees without any optical brighteners. Do not iron directly on to prints.</p>
		</div>
		<br/>
	
	<!--ADD TO CART--> 
	<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="HJ9E9ZW5C727C">
<table class="size-table">
<!--<tr><td class="dropdown-label"><input type="hidden" name="on0" value="Sizes">Sizes</td></tr>-->
<tr><td><select name="os0">
	<option value="" disabled selected>_select your size</option>
	<option value="S">S </option>
	<option value="M">M </option>
	<option value="L">L </option>
	<option value="XL">XL </option>
</select> </td></tr>
</table>
<br/>
<input value="_add-to-cart" class="add-to-class" type="submit" border="0" name="submit" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>


</div>


<!--CONTAINER DIV CLOSE-->	
</div>


<?php
	include 'footer.php' ;
?>


</div>


<!-- Swiper JS -->
  <script src="Swiper-4.1.0/dist/js/swiper.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
    loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  
  
  function detectWebGL () {
    	// Create canvas element. The canvas is not added to the
    	// document itself, so it is never displayed in the
    	// browser window.
    	var canvas = document.createElement("canvas");
    	// Get WebGLRenderingContext from canvas element.
    	var gl = canvas.getContext("webgl")
      		|| canvas.getContext("experimental-webgl");
    	// Report the result.
    	if (gl && gl instanceof WebGLRenderingContext) {
    		console.log("Congratulations! Your browser supports WebGL.");
			
			//run webGl content
			new cloView("assets/sweatshirt.gltf",'cloView-Arc', 0xffffff,400,400);
			
			new cloView("assets/sweatshirt.gltf",'cloView-Champs', 0xffffff,400,400);

       		 
    	} else {
				document.getElementById('hello').innerHTML='sorry no webGL so here is a slideshow';
      		alert("Failed to get WebGL context. "
        		+ "Your browser or device may not support WebGL.");
    		}
  		}
  		
  		detectWebGL();
  		
  	</script>

</body>
</html>
