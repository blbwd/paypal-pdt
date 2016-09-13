<?php if($payment_data)
echo 'Payer Email: ' . $payment_data['payer_email'];
if($_GET): 
?>
<hr/>
<h2>Details</h2>

<pre>GET: <?php print_r($_GET) ?></pre>
<pre>PDT: <?php print_r($payment_data) ?></pre>
<?php endif ?>
