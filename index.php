<?php 
include 'paypal-pdt-functions.php';

$payment_data = isset($_GET['tx'])
? process_pdt($_GET['tx'])
: FALSE;

$success_url = 'http://www.yourdomain.com/success/';
$cancel_url = 'http://www.yourdomain.com/cancel/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>PayPal PDT Sample</title>
</head>
<body>
<h1>PayPal PDT Sample</h1>
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

</body>
</html>