<?php
/**
 * Created by Sevio Solutions.
 * User: Denis DIMA
 * Product: 2Checkout-ipn
 * Date: 10.01.2017
 * Time: 15:07
 * All rights and copyrights are owned by Sevio Solutions®
 */

require_once("2checkout-php/lib/Twocheckout.php");
require_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2Checkout Payment Form</title>
    <style>
        label {
            display: block;
            padding: 5px 0;
        }

        input {
            display: block;
        }
    </style>
</head>

<body>

<form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>
    <input type='hidden' name='sid' value='<?php echo SELLER_ID ?>'/>
    <input type='hidden' name='mode' value='2CO'>
    <input type='hidden' name='li_0_type' value='product'>
    <input type='hidden' name='li_0_name' value='Example Product Name'>
    <input type='hidden' name='li_0_product_id' value='Example Product ID'>
    <input type='hidden' name='li_0__description' value='Example Product Description'>
    <input type='hidden' name='li_0_price' value='10.00'>
    <input type='hidden' name='li_0_quantity' value='2'>
    <input type='hidden' name='li_0_tangible' value='Y'>
    <input type='hidden' name='li_1_type' value='shipping'>
    <input type='hidden' name='li_1_name' value='Example Shipping Method'>
    <input type='hidden' name='li_1_price' value='1.50'>
    <input type='hidden' name='li_2_type' value='coupon'>
    <input type='hidden' name='li_2_name' value='Example Coupon'>
    <input type='hidden' name='li_2_price' value='1.00'>
    <input type='hidden' name='li_3_type' value='tax'>
    <input type='hidden' name='li_3_name' value='Example Tax'>
    <input type='hidden' name='li_3_price' value='0.50'>
    <input type='hidden' name='card_holder_name' value='Checkout Shopper'>
    <input type='hidden' name='street_address' value='123 Test St'>
    <input type='hidden' name='street_address2' value='Suite 200'>
    <input type='hidden' name='city' value='Columbus'>
    <input type='hidden' name='state' value='OH'>
    <input type='hidden' name='zip' value='43228'>
    <input type='hidden' name='country' value='USA'>
    <input type='hidden' name='email' value='example@2co.com'>
    <input type='hidden' name='phone' value='614-921-2450'>
    <input type='hidden' name='phone_extension' value='197'>
    <input type='hidden' name='ship_name' value='Gift Receiver'>
    <input type='hidden' name='ship_street_address' value='1234 Address Road'>
    <input type='hidden' name='ship_street_address2' value='Apartment 123'>
    <input type='hidden' name='ship_city' value='Columbus'>
    <input type='hidden' name='ship_state' value='OH'>
    <input type='hidden' name='ship_zip' value='43235'>
    <input type='hidden' name='ship_country' value='USA'>
<!--    <input type='hidden' name='ins_url' value='http://www.botlist.net/checkout-ipn/ipn.php'>-->
    <input name='submit' type='submit' value='Checkout'>
</form>

</body>
</html>