<html>
<head>
<title>Not So Important Information</title>
</head>
<body>

// these fields will be added to help create an encrypted signature for the POST

<form id="payment_form" action="unsigneddata.php" method= "post">
<input type = "hidden" name = "important_fields" value="billTo_fname,billTo_lname,billTo_email_billTo_address,billTo_city,billTo_state,billTo_country,billTo_postal_code">
<input type="hidden" name="unsigned_data_fields" value="card_type,card_number,card_exp_date">
<input type = "hidden" name="locale" value="en">
<fieldset>
<legend>These fields I will try to POST them to my server to sign</legend>

<fieldset id="confirmation">

// card info that are posted along with the signed data fields.

<BR></BR>

<div id="unsigneddatasection" class="section">
<span>card_type:</span><input type="text" name="card_type">
<span>card_number:</span><input type="text" name="card_number">
<span>card_exp_date:</span><input type="text" name="ard_exp_date">

</div>
</fieldset>

<input type="submit" id="submit" name="submit" value="Press To Confirm"/>

</form>
</body>
</html>