<!DOCTYPE html>
<html lang="en">
<head>
  <title>PayPal PDT Sample Application : Success</title>
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
      <?php if($payment_data)
      echo 'Payer Email: ' . $payment_data['payer_email'];
      if($_GET): 
      ?>
      <h2>Details:</h2>

      <pre>GET: <?php print_r($_GET) ?></pre>
      <pre>PDT: <?php print_r($payment_data) ?></pre>
      <?php endif ?>
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
