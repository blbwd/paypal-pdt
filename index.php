<?php 
include 'paypal-pdt-functions.php';
$payment_data = isset($_GET['tx'])
? process_pdt($_GET['tx'])
: FALSE;
$success_url = 'http://www.sanjaybhowmick.com/demo/paypal-pdt/success.php';
$cancel_url = 'http://www.sanjaybhowmick.com/demo/paypal-pdt/cancel.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PayPal PDT Sample Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Google Analytics -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64047077-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Google Analytics -->
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.sanjaybhowmick.com/simple-paypal-integration-on-your-website/">Back to Tutorial</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="http://www.wavesdream.com/" target="_blank">Website Development</a></li>
      <li><a href="http://www.packoffers.com" target="_blank">Get Latest Deals</a></li>
      <li><a href="http://www.meghpeon.com/" target="_blank">Explore Nature</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <div class="page-header">
      <h1>PayPal PDT Sample</h1>
   </div>
   <div class="row">

	   <div class="col-md-12">
	   <p>Click the <i>Buy Now button</i> and make a dummy payment. When you return the PDT data will be printed.</p>
	   	<p>Click the Buy Now button and make a dummy payment. When you return the PDT data will be printed.</p>

		<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" accept-charset="utf-8">
		<p>
		<input type="hidden" name="cmd" value="_xclick" />
		<input type="hidden" name="charset" value="utf-8" />
		<input type="hidden" name="business" value="sanjay_1237380148_biz@programmer.net" />
		<input type="hidden" name="item_name" value="WordPress Customization" />
		<input type="hidden" name="item_number" value="WP001" />
		<input type="hidden" name="amount" value="50.00" />
		<input type="hidden" name="currency_code" value="USD" />
		<input type="hidden" name="return" value="<?php echo $success_url; ?>" />
		<input type="hidden" name="cancel_return" value="<?php echo $cancel_url; ?>" />
		<input type="hidden" name="bn" value="Business_BuyNow_WPS_SE" />
		<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" name="submit" alt="Buy Now" />
		</p>
		</form>

	   </div>

   </div>

   <div class="row">
   		<div class="col-md-12">
   		 <!-- Google Adsense -->	
   		 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- SB Responsive Image Text -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-7533430201625828"
		     data-ad-slot="6526477158"
		     data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
   		  <!-- Google Adsense -->	
	   </div>
   </div>
</div>

<footer class="footer">
  <div class="container">
    <p class="text-muted credit">This application is developed by <a href="http://www.sanjaybhowmick.com/" target="_blank">Sanjay Bhowmick</a> and hosted by <a href="http://www.wavesdream.com/" target="_blank">Wavesdream</a>.</p>
  </div>
</footer>

</body>
</html>
