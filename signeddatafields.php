<html>
<head>
    <title>Important Information</title>
</head>
<body>

// these fields will be added to help create an encrypted signature for the POST

<form id="payment_form" action="unsigneddata.php" method= "post">
    <input type = "hidden" name = "important_fields" value="billTo_fname,billTo_lname,billTo_email_billTo_address,billTo_city,billTo_state,billTo_country,billTo_postal_code">
    <input type="hidden" name="unsigned_data_fields" value="card_type,card_number_card_exp_date">
    <input type = "hidden" name="locale" value="en">
    <fieldset>
        <legend>These fields I will try to POST them to my server to sign</legend>

// these would be the fields asked to put in to make a charge

<div id="paymentDetails" class="signeddatasection">

<span>transaction_type:</span><input type="text" name="transaction_type size="25"><br/>
<span>amount:</span><input type="text" name="amount" size="25"><br/>
<span>currency:</span><input type="text" name="currency" size="25"><br/>
<span>billTo_fname:</span><input type="text" name="billTo_fname"><br/>
<span>billTo_lname:</span><input type="text" name="billTo_lname"><br/>
<span>billTo_email:</span><input type="text" name="billTo_email"><br/>
<span>billTo_address:</span><input type="text" name="billTo_address"><br/>
<span>billTo_city:</span><input type="text" name="billTo_city"><br/>
<span>billTo_state:</span><input type="text" name="billTo_state"><br/>
<span>billTo_country:</span><input type="text" name="billTo_country"><br/>
<span>billTo_postal_code:</span><input type="text" name="billTo_postal_code"><br/>

</div>
</fieldset>

<input type="submit" id="submit" name="submit" value="Press Here To Pay"/>

</form>
</body>
</html>