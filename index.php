<?php
$PaymentID = substr(md5(time()), 0,19);
$OrderNumber = substr(hash('sha256', time()), 0,19);
$CustIP = $_SERVER['REMOTE_ADDR'];
$ServiceID = "SIT";
$MerchantReturnURL = "https://dev.local/rnd/eghl/response.php";
$MerchantCallbackURL = "https://dev.local/rnd/eghl/callback.php";
$CurrencyCode = "MYR";
$PageTimeout = 780;
$Amount = "228.00";
$Password = "sit12345";

$paymentActionURL = "https://test2pay.ghl.com/IPGSG/Payment.aspx";
$hash = $Password.$ServiceID.$PaymentID.$MerchantReturnURL.$MerchantCallbackURL.$Amount.$CurrencyCode.$CustIP.$PageTimeout;

?>
<form name="frmPayment" method="post" action="<?=$paymentActionURL?>">
	<input type="hidden" name="TransactionType" value="SALE">
	<input type="hidden" name="PymtMethod" value="ANY">
	<input type="hidden" name="ServiceID" value="<?=$ServiceID?>">
	<input type="hidden" name="PaymentID" value="<?=$PaymentID?>">
	<input type="hidden" name="OrderNumber" value="<?=$OrderNumber?>">
	<input type="hidden" name="PaymentDesc" value="Testing payment for pos aviation sdn bhd.">
	<input type="hidden" name="MerchantReturnURL" value="<?=$MerchantReturnURL?>">
	<input type="hidden" name="MerchantCallbackURL" value="<?=$MerchantCallbackURL?>">
	<input type="hidden" name="Amount" value="<?=$Amount?>">
	<input type="hidden" name="CurrencyCode" value="<?=$CurrencyCode?>">
	<input type="hidden" name="CustIP" value="<?=$CustIP?>">
	<input type="hidden" name="CustName" value="Jason">
	<input type="hidden" name="CustEmail" value="jason@gmail.com">
	<input type="hidden" name="CustPhone" value="60123456789">
	<input type="hidden" name="HashValue" value="<?=hash('sha256', $hash)?>">
	<input type="hidden" name="LanguageCode" value="en">
	<input type="hidden" name="PageTimeout" value="<?=$PageTimeout?>">
	<input type="submit" name="submit" value="Pay now">
</form>