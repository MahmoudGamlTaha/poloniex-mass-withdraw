<?php
$apiKey = 'PUT YOUR API KEY HERE';
$apiSecret = 'PUT YOUR API SECRET HERE';
$address = 'PUT YOUR XMR ADDRESS HERE';
$withdrawAmount = '1000';
$withdrawFee = '0.2';

include 'poloniex.class.php';

// Ask for input (how many times we shall loop)
echo "Each withdraw is 1000 XMR, how many times do you want to withdraw 1000 XMR? E.g enter 2 to withdraw 2000 XMR: \n";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
$loop = trim($line);
if(! is_numeric($loop) OR $loop < 1 OR $loop > 1000){
    echo "ABORTING, INVALID NUMBER, PLEASE SPECIFY NUMBER 1-1000!\n";
    exit;
}
fclose($handle);
echo "\n"; 
echo "Thank you, continuing...\n";

// Ask for confirmation
echo "You have selected to withdraw: \n".$withdrawAmount." XMR * ".$loop." = ".($withdrawAmount * $loop)." XMR (Total Fee: ".($withdrawFee * $loop)." XMR).\n
To address: \n".$address." \n
Are you sure you want to do this? Type 'yes' to continue: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) != 'yes'){
    echo "ABORTING!\n";
    exit;
}
fclose($handle);
echo "\n"; 
echo "Thank you, continuing...\n";

$polo = new poloniex($apiKey,$apiSecret);

for($i = 0;$i<$loop;$i++)
{

$res = $polo->withdraw('XMR',($withdrawAmount + $withdrawFee),$address);

echo '<pre>';
var_dump($res);
echo '</pre>';
sleep(1);
}