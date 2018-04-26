<?php
function currencyConverter($from_Currency,$to_Currency,$amount) {
$from_Currency = urlencode($from_Currency);
$to_Currency = urlencode($to_Currency);
$get = file_get_contents("https://finance.google.com/finance/converter?a=1&from=$from_Currency&to=$to_Currency");
$get = explode("<span class=bld>",$get);
$get = explode("</span>",$get[1]);
$converted_currency = preg_replace("/[^0-9\.]/", null, $get[0]);
return $converted_currency;
}


// change amount according to your needs
$amount =10;
// change From Currency according to your needs
$from_Curr ='USD';
// change To Currency according to your needs
$to_Curr ='INR';
$converted_currency=currencyConverter($from_Curr, $to_Curr, $amount);
// Print outout
echo $converted_currency;

?>