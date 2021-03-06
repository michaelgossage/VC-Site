<!doctype html>
<html>
<!-- swiper.min.css must come before my own stylesheet to make sure my settings take over-->
<link rel="stylesheet" href="Swiper-4.1.0/dist/css/swiper.min.css">
<link href='http://fonts.googleapis.com/css?family=Muli:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>

<head>
	
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Vacation_Culture</title>

</head>

<body>


<div class="container">

<?php
	include 'menu.php' ;
?>

<div class="items_container">


<!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
    
      <div class="swiper-slide">
      	<div style="height: 570px;">
		<img src="Images/ProductPictures/Sweater_Arc/Arc_Front.jpg" alt="logo" style="width:auto; max-height: 500px; max-width:100%; align:center; display:block;">
		<!--_front-->
		</div>
      </div>
      
      <div class="swiper-slide">
      	<div style="height: 570px;">
      	<img src="Images/ProductPictures/Sweater_Arc/Arc_Main-Print.jpg" alt="logo" style="align-self:center; width:auto; max-height: 500px; max-width:100%; align:center; margin:20px auto; display:block;">
      	
      	</div>
      </div>
      
      <div class="swiper-slide">
      	<div style="height: 570px;">
      	<img src="Images/ProductPictures/Sweater_Arc/Arc_Tag.jpg" alt="logo" style="align-self:center; width:auto; max-height: 500px; max-width:100%; align:center; margin:20px auto; display:block;">
		
      	</div>
      </div>
      
    </div>
    <!-- Add Arrows . only need the swiper-button-next/prev class in a div but added css and cvg to change color to black-->
    <div class="swiper-button-next" style="background-image:none;"><svg 
 xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" viewBox="0 0 100 100">
<path fill-rule="evenodd" stroke="rgb(0, 0, 0)" stroke-width="4px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
 d="M10.000,4.000 L42.000,36.000 L10.000,68.000 "/>
</svg></div>
    <div class="swiper-button-prev" style="background-image:none;"><svg 
 xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink"  width="64px" viewBox="0 0 100 100">
<path fill-rule="evenodd"  stroke="rgb(0, 0, 0)" stroke-width="4px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
 d="M36.000,4.000 L4.000,36.000 L36.000,68.000 "/>
</svg></div>
  </div>
  <!-- end swiper-->

<div class="item_details" style="margin-top:20px;">
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


<!-- Swiper -->
  <div class="swiper-container">
  
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      	<div style="height: 570px;">
		<img src="Images/ProductPictures/Sweater_Champs/Champs_Front.jpg" alt="logo" style="width:auto; max-height: 500px; max-width:100%; align:center; display:block;">
		
		</div>
      </div>
      <div class="swiper-slide">
      	<div style="height: 570px;">
      	<img src="Images/ProductPictures/Sweater_Champs/Champs_Main-Print.jpg" alt="logo" style="align-self:center; width:auto; max-height: 500px; max-width:100%; align:center; margin:20px auto; display:block;">
      	
      	</div>
      </div>
      <div class="swiper-slide">
      	<div style="height: 570px;">
      	<img src="Images/ProductPictures/Sweater_Champs/Champs_Tag.jpg" alt="logo" style="align-self:center; width:auto; max-height: 500px; max-width:100%; align:center; margin:20px auto; display:block;">
		
      	</div>
      </div>
      
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next" style="background-image:none;"><svg 
 xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" viewBox="0 0 100 100">
<path fill-rule="evenodd" stroke="rgb(0, 0, 0)" stroke-width="4px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
 d="M10.000,4.000 L42.000,36.000 L10.000,68.000 "/>
</svg></div>
    <div class="swiper-button-prev" style="background-image:none;"><svg 
 xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink"  width="64px" viewBox="0 0 100 100">
<path fill-rule="evenodd"  stroke="rgb(0, 0, 0)" stroke-width="4px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
 d="M36.000,4.000 L4.000,36.000 L36.000,68.000 "/>
</svg></div>
  </div>
    <!-- end swiper-->

<div class="item_details" style="margin-top:20px;">
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

  	</script>

</body>
</html>
