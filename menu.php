<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
   	 	$("#toggleButton").click(function(){
    
     	   $(".menu").toggle(500);
    	});
    	
	});
</script>


<div class="logo">
		<a href="http://www.vacation-culture.com">
			<img src="Images/logo.png" alt="logo">
		</a>
		
</div>

<div class="viewcart">
<!--VIEW CART-->
	<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="encrypted" 
		value="-----BEGIN PKCS7-----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-----END PKCS7-----">
		<input value="_view-cart" type="submit" style="float:right" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
	</form>
</div>

<!--toggle button-->
<div class="toggle"><button id="toggleButton">Menu</button></div>

<div class="menu">
	<ul> 
		
		<li><a href="sweatshirts.php">Sweatshirt</a></li>
		
		<li><a href="bags.php">Bag</a></li>
		
		<p></p>
		
		<li style="color:rgba(200,200,200,1.00)"><!--<a href="lookbook.html">-->Lookbook<!--</a>--></li>
		
		<li style="color:rgba(200,200,200,1.00)"><!--<a href="video.html">-->Video<!--</a>--></li>
		
		<p></p>
		<li><a href="https://www.instagram.com/vacationculture">Instagram</a></li>
		<p></p>
		<li><a href="concept.php">Concept</a></li>
		<li><a href="contact.php">Contact</a></li>
		<p></p>
		<li>
			<div id="google_translate_element"></div><script type="text/javascript">
			function googleTranslateElementInit() {
  				new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
				}
			</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		</li>
		
	</ul>
</div>